<?php

class App {
    protected $controller = 'HomeController';
    protected $method = 'index';
    protected $params = [];

    public function __construct() {
        $routes = require '../app/routes.php';
        $routeKey = isset($_GET['url']) ? trim($_GET['url'], '/') : '';
// var_dump($routeKey);
// die;
        if (isset($routes[$routeKey])) {
            $this->controller = $routes[$routeKey]['controller'];
            $this->method = $routes[$routeKey]['method'];
            $this->params = [];
            require_once '../app/controllers/' . $this->controller . '.php';
            $this->controller = new $this->controller;
            call_user_func_array([$this->controller, $this->method], []);
            exit;
        }


        $url = $this->parseURL();

        // Controller
        if(isset($url[0]) && file_exists('../app/controllers/' . ucfirst($url[0]) . 'Controller.php')) {
            $this->controller = ucfirst($url[0]) . 'Controller';
            unset($url[0]);
        }
        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        // Method
        if(isset($url[1])) {
            if(method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // Params
        $this->params = $url ? array_values($url) : [];

        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseURL() {
        if(isset($_GET['url'])) {
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }
}