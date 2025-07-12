<?php

class HomeController extends Controller {
    public function index() {
        $model = $this->model('HomeModel');
        $data = $model->getCompanyInfo();
        $this->view('home', $data);
    }
}