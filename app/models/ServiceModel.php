<?php

require_once __DIR__ . '/Model.php';

class ServiceModel extends Model {
    public function getServices() {
        $stmt = $this->db->prepare("SELECT * FROM services ORDER BY created_at DESC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getServiceById($id) {
        $stmt = $this->db->prepare("SELECT * FROM services WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function createService($name, $description, $price, $image) {
        $stmt = $this->db->prepare("INSERT INTO services (name, description, price, image) VALUES (:name, :description, :price, :image)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':image', $image);
        return $stmt->execute();
    }

    public function updateService($id, $name, $description, $price, $image) {
        $stmt = $this->db->prepare("UPDATE services SET name = :name, description = :description, price = :price, image = :image WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':image', $image);
        return $stmt->execute();
    }

    public function deleteService($id) {
        $stmt = $this->db->prepare("DELETE FROM services WHERE id = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}