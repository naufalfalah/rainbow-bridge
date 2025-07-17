<?php

class LoginController extends Controller {
    public function __construct() {
        // Pastikan session dimulai
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        // Cek apakah user sudah login
        if (isset($_SESSION['admin'])) {
            header('Location: ?url=admin');
            exit;
        }
    }

    public function index() {
        // Tampilkan halaman login
        $this->view('login');
    }

    public function authenticate() {
        // Proses autentikasi
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $model = $this->model('AdminModel');
            $admin = $model->getUserByUsername($username);

            if ($admin && password_verify($password, $admin['password'])) {
                $_SESSION['admin'] = $admin;
                header('Location: ?url=admin');
                exit;
            } else {
                $this->view('login', ['error' => 'Invalid username or password']);
            }
        }
    }

    public function logout() {
        // Proses logout
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
            session_destroy();
        }
        header('Location: /login');
        exit;
    }
}