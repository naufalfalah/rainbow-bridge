<?php

class AdminController extends Controller {
    private $username = 'test';
    private $password = 'test';

    public function index() {
        // Pastikan session dimulai
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        // Cek apakah user sudah login
        if (!isset($_SESSION['admin'])) {
            header('Location: ?url=login');
            exit;
        }

        $model = $this->model('ServiceModel');
        $services = $model->getServices();

        $model = $this->model('TestimonyModel');
        $testimonies = $model->getTestimonies();
        
        $model = $this->model('FaqModel');
        $faqs = $model->getFaqs();

        $model = $this->model('OrderModel');
        $orders = $model->getorders();
        
        // Tampilkan halaman admin
        $this->view('admin', [
            'services' => $services,
            'testimonies' => $testimonies,
            'faqs' => $faqs,
            'orders' => $orders,
        ]);
    }

    public function generate() {
        $model = $this->model('AdminModel');
        $admin = $model->getUserByUsername($this->username);

        if ($admin) {
            echo "Admin already exists.";
            return;
        }

        $hashedPassword = password_hash($this->password, PASSWORD_BCRYPT);
        $model->createAdmin($this->username, $hashedPassword);
        echo "Creating admin user with username: {$this->username} and password: {$this->password}\n";
    }
}