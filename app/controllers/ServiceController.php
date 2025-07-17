<?php

class ServiceController extends Controller {
    public function __construct() {
        // Pastikan session dimulai
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        // Cek apakah user sudah login
        if (!isset($_SESSION['admin'])) {
            header('Location: ?url=login');
            exit;
        }
    }

    public function delete() {
        $id = $_GET['id'];

        $model = $this->model('ServiceModel');
        $model->deleteService($id);

        header('Location: ?url=admin');
        exit;
    }
}