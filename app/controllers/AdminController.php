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

        $serviceModel = $this->model('ServiceModel');
        $services = $serviceModel->getServices();

        $testimonyModel = $this->model('TestimonyModel');
        $testimonies = $testimonyModel->getTestimonies();
        
        $faqModel = $this->model('FaqModel');
        $faqs = $faqModel->getFaqs();

        $orderModel = $this->model('OrderModel');
        $orders = $orderModel->getorders();
        
        // Tampilkan halaman admin
        $this->view('admin', [
            'services' => $services,
            'testimonies' => $testimonies,
            'faqs' => $faqs,
            'orders' => $orders,
            'totalRevenue' => $orderModel->getTotalRevenue(),
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