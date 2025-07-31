<?php

class OrderController extends Controller {
    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $ownerName = $_POST['owner_name'] ?? null;
            $petName = $_POST['pet_name'] ?? null;
            $religion = $_POST['religion'] ?? null;
            $birthDate = $_POST['birth_date'] ?? null;
            $weight = $_POST['weight'] ?? null;
            $deathDate = $_POST['death_date'] ?? null;
            $deathReason = $_POST['death_reason'] ?? null;
            $floatTake = $_POST['float_take'] ?? null;
            $ashPot = $_POST['ash_pot'] ?? null;
            
            // Validasi input
            if (empty($ownerName) || empty($petName) || empty($religion) || empty($weight) || empty($deathDate) || empty($deathReason) || empty($floatTake)) {
                $_SESSION['error'] = 'Fields marked with * are required.';
                header('Location: ?url=order/create');
                exit;
            }

            $model = $this->model('OrderModel');
            $model->createOrder(
                $ownerName,
                $petName,
                $religion,
                $birthDate,
                $weight,
                $deathDate,
                $deathReason,
                $floatTake,
                $ashPot
            );

            header('Location: ?url=home');
            exit;
        }

        $model = $this->model('ServiceModel');
        $services = $model->getServices();

        $this->view('order-create', [
            'services' => $services,
        ]);
    }
}