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

        // Ambil data services
        $model = $this->model('ServiceModel');
        $services = $model->getServices();

        // Ambil data testimonies
        $model = $this->model('TestimonyModel');
        $testimonies = $model->getTestimonies();
        
        // Ambil data faqs
        $model = $this->model('FaqModel');
        $faqs = $model->getFaqs();

        // Ambil data users
        $model = $this->model('UserModel');
        $users = $model->getUsers();
        
        // Tampilkan halaman admin
        $this->view('admin', [
            'services' => $services,
            'testimonies' => $testimonies,
            'faqs' => $faqs,
            'users' => $users,
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