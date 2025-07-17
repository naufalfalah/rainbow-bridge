<?php

class TestimonyController extends Controller {
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
            $author = $_POST['author'];
            $message = $_POST['message'];
    
            if (empty($author) || empty($message)) {
                $_SESSION['error'] = 'All fields are required.';
                header('Location: ?url=admin/testimonies/create');
                exit;
            }
    
            $model = $this->model('TestimonyModel');
            $model->createTestimony($author, $message);
    
            header('Location: ?url=admin');
            exit;
        }
    
        $this->view('testimony-create');
    }

    public function edit() {
        $id = $_GET['id'];
    
        $model = $this->model('TestimonyModel');
        $testimony = $model->getTestimonyById($id);
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $author = $_POST['author'];
            $message = $_POST['message'];
    
            // Validasi input
            if (empty($author) || empty($message)) {
                $_SESSION['error'] = 'All fields are required.';
                header("Location: ?url=admin/testimonies/edit&id=$id");
                exit;
            }
    
            $model->updateTestimony($id, $author, $message);
    
            header('Location: ?url=admin');
            exit;
        }
    
        $this->view('testimony-edit', ['testimony' => $testimony]);
    }

    public function delete() {
        $id = $_GET['id'];

        $model = $this->model('TestimonyModel');
        $model->deleteTestimony($id);

        header('Location: ?url=admin');
        exit;
    }
}