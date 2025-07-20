<?php

require_once __DIR__ . '/Model.php';

class OrderModel extends Model {
    public function getOrders() {
        $stmt = $this->db->prepare("SELECT * FROM orders ORDER BY created_at DESC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Get a order by ID
    public function getOrderById($id) {
        $sql = "SELECT * FROM orders WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function createOrder($whatsappNumber, $serviceId, $petFuneralService, $pickupArea, $returnArea, $griefAttributes, $ashesScattering, $addons) {
        $sql = "INSERT INTO orders (whatsapp_number, service_id, pet_funeral_service, pickup_area, return_area, grief_attributes, ashes_scattering, addons) 
                VALUES (:whatsapp_number, :service_id, :pet_funeral_service, :pickup_area, :return_area, :grief_attributes, :ashes_scattering, :addons)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':whatsapp_number', $whatsappNumber);
        $stmt->bindParam(':service_id', $serviceId);
        $stmt->bindParam(':pet_funeral_service', $petFuneralService);
        $stmt->bindParam(':pickup_area', $pickupArea);
        $stmt->bindParam(':return_area', $returnArea);
        $stmt->bindParam(':grief_attributes', $griefAttributes);
        $stmt->bindParam(':ashes_scattering', $ashesScattering);
        $stmt->bindParam(':addons', $addons);
        return $stmt->execute();
    }

    // Update a order
    public function updateOrder($id, $whatsappNumber, $serviceId, $petFuneralService, $pickupArea, $returnArea, $griefAttributes, $ashesScattering, $addons) {
        $sql = "UPDATE orders 
                SET whatsapp_number = :whatsapp_number, 
                    service_id = :service_id, 
                    pet_funeral_service = :pet_funeral_service, 
                    pickup_area = :pickup_area, 
                    return_area = :return_area, 
                    grief_attributes = :grief_attributes, 
                    ashes_scattering = :ashes_scattering, 
                    addons = :addons 
                WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':whatsapp_number', $whatsappNumber);
        $stmt->bindParam(':service_id', $serviceId);
        $stmt->bindParam(':pet_funeral_service', $petFuneralService);
        $stmt->bindParam(':pickup_area', $pickupArea);
        $stmt->bindParam(':return_area', $returnArea);
        $stmt->bindParam(':grief_attributes', $griefAttributes);
        $stmt->bindParam(':ashes_scattering', $ashesScattering);
        $stmt->bindParam(':addons', $addons);
        return $stmt->execute();
    }

    // Delete a order
    public function deleteOrder($id) {
        $sql = "DELETE FROM orders WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}