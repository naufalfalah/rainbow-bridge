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

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $image = $_FILES['image'];
    
            // Validasi input
            if (empty($name) || empty($price) || empty($description)) {
                $_SESSION['error'] = 'All fields are required.';
                header('Location: ?url=admin/services/create');
                exit;
            }
    
            // Validasi dan upload file gambar
            $imagePath = null;
            if (!empty($image['name'])) {
                $targetDir = '../../uploads/';
                if (!is_dir($targetDir)) {
                    mkdir($targetDir, 0777, true); // Buat direktori jika belum ada
                }

                $targetFile = $targetDir . basename($image['name']);
                if (!move_uploaded_file($image['tmp_name'], $targetFile)) {
                    die('Failed to move uploaded file.');
                }

                $imagePath = $targetDir . basename($image['name']);
                $imageFileType = strtolower(pathinfo($imagePath, PATHINFO_EXTENSION));
    
                // Validasi tipe file
                $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
                if (!in_array($imageFileType, $allowedTypes)) {
                    $_SESSION['error'] = 'Invalid image format. Only JPG, JPEG, PNG, and GIF are allowed.';
                    header('Location: ?url=admin/services/create');
                    exit;
                }
            }
    
            // Simpan data layanan ke database
            $model = $this->model('ServiceModel');
            $model->createService($name, $price, $description, $imagePath);
    
            header('Location: ?url=admin');
            exit;
        }
    
        // Tampilkan form create
        $this->view('service-create');
    }

    public function edit() {
        $id = $_GET['id'];
    
        $model = $this->model('ServiceModel');
        $service = $model->getServiceById($id);
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $image = $_FILES['image'];
    
            // Validasi input
            if (empty($name) || empty($price) || empty($description)) {
                $_SESSION['error'] = 'All fields are required.';
                header("Location: ?url=admin/services/edit&id=$id");
                exit;
            }
    
            // Validasi dan upload file gambar
            $imagePath = $service['image']; // Default ke gambar lama
            if (!empty($image['name'])) {
                $targetDir = '../../uploads/';
                if (!is_dir($targetDir)) {
                    mkdir($targetDir, 0777, true); // Buat direktori jika belum ada
                }

                $targetFile = $targetDir . basename($image['name']);
                if (!move_uploaded_file($image['tmp_name'], $targetFile)) {
                    die('Failed to move uploaded file.');
                }

                $imagePath = $targetDir . basename($image['name']);
                $imageFileType = strtolower(pathinfo($imagePath, PATHINFO_EXTENSION));
    
                // Validasi tipe file
                $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
                if (!in_array($imageFileType, $allowedTypes)) {
                    $_SESSION['error'] = 'Invalid image format. Only JPG, JPEG, PNG, and GIF are allowed.';
                    header("Location: ?url=admin/services/edit&id=$id");
                    exit;
                }
            }
    
            // Perbarui data layanan
            $model->updateService($id, $name, $price, $description, $imagePath);
    
            header('Location: ?url=admin');
            exit;
        }
    
        // Tampilkan form edit dengan data layanan
        $this->view('service-edit', ['service' => $service]);
    }

    public function delete() {
        $id = $_GET['id'];

        $model = $this->model('ServiceModel');
        $model->deleteService($id);

        header('Location: ?url=admin');
        exit;
    }
}