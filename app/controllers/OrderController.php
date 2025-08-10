<?php

class OrderController extends Controller {
    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $ownerName = $_POST['owner_name'] ?? null;
            $address = $_POST['address'] ?? null;
            $animalType = $_POST['animal_type'] ?? null;
            $petName = $_POST['pet_name'] ?? null;
            $religion = $_POST['religion'] ?? null;
            $birthDate = $_POST['birth_date'] ?? null;
            $weight = (int) $_POST['weight'] ?? 0;
            $deathDate = $_POST['death_date'] ?? null;
            $deathReason = $_POST['death_reason'] ?? null;
            $floatTake = $_POST['float_take'] ?? null;
            $ashPot = $_POST['ash_pot'] ?? null;
            $totalCost = 0;
            
            // Validasi input
            if (empty($ownerName) || empty($petName) || empty($religion) || empty($weight) || empty($deathDate) || empty($deathReason) || empty($floatTake)) {
                $_SESSION['error'] = 'Fields marked with * are required.';
                header('Location: ?url=order/create');
                exit;
            }

            if ($animalType === 'cat') {
                $totalCost = 270000; // Base price for cat
                if ($weight > 3) {
                    $totalCost += ($weight - 3) * 25000; // Additional cost for weight over 3kg
                }
            } else if ($animalType === 'dog') {
                $totalCost = 370000; // Base price for dog
                if ($weight > 5) {
                    $totalCost += ($weight - 5) * 25000; // Additional cost for weight over 5kg
                }
            }

            $model = $this->model('OrderModel');
            $model->createOrder(
                $ownerName,
                $address,
                $animalType,
                $petName,
                $religion,
                $birthDate,
                $weight,
                $deathDate,
                $deathReason,
                $floatTake,
                $ashPot,
                $totalCost
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