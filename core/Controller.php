<?php

class Controller {
    public function view($view, $data = []) {
        extract($data); // Ekstrak array asosiatif menjadi variabel
        require_once "../app/views/{$view}.php";
    }

    public function model($model) {
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }
}