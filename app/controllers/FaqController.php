<?php

class FaqController extends Controller {
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
            $question = $_POST['question'];
            $answer = $_POST['answer'];
    
            if (empty($question) || empty($answer)) {
                $_SESSION['error'] = 'All fields are required.';
                header('Location: ?url=admin/faqs/create');
                exit;
            }
    
            $model = $this->model('FaqModel');
            $model->createFaq($question, $answer);
    
            header('Location: ?url=admin');
            exit;
        }
    
        $this->view('faq-create');
    }

    public function edit() {
        $id = $_GET['id'];
    
        $model = $this->model('FaqModel');
        $faq = $model->getFaqById($id);
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $question = $_POST['question'];
            $answer = $_POST['answer'];
    
            // Validasi input
            if (empty($question) || empty($answer)) {
                $_SESSION['error'] = 'All fields are required.';
                header("Location: ?url=admin/faqs/edit&id=$id");
                exit;
            }
    
            $model->updateFaq($id, $question, $answer);
    
            header('Location: ?url=admin');
            exit;
        }
    
        $this->view('faq-edit', ['faq' => $faq]);
    }

    public function delete() {
        $id = $_GET['id'];

        $model = $this->model('FaqModel');
        $model->deleteFaq($id);

        header('Location: ?url=admin');
        exit;
    }
}