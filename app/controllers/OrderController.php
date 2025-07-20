<?php

class OrderController extends Controller {
    public function create() {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $whatsappNumber = $_POST['whatsapp_number'];
            $serviceId = $_POST['service_id'];
            $petFuneralService = isset($_POST['pet_funeral_service']) ? $_POST['pet_funeral_service'] : null;
            $pickupArea = $_POST['pickup_area'];
            $returnArea = $_POST['return_area'];
            $griefAttributes = $_POST['grief_attributes'];
            $ashesScattering = isset($_POST['ashes_scattering']) ? $_POST['ashes_scattering'] : null;
            $addons = isset($_POST['addons']) ? $_POST['addons'] : null;

            // Validasi input
            if (empty($whatsappNumber) || empty($serviceId) || empty($pickupArea) || empty($returnArea) || empty($griefAttributes)) {
                $_SESSION['error'] = 'Fields marked with * are required.';
                header('Location: ?url=order/create');
                exit;
            }

            $model = $this->model('OrderModel');
            $model->createOrder($whatsappNumber, $serviceId, $petFuneralService, $pickupArea, $returnArea, $griefAttributes, $ashesScattering, $addons);

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