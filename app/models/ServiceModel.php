<?php

require_once __DIR__ . '/Model.php';

class ServiceModel extends Model {
    public function getServices() {
        $stmt = $this->db->prepare("SELECT * FROM services ORDER BY created_at DESC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addService($name, $description) {
        $stmt = $this->db->prepare("INSERT INTO services (name, description) VALUES (:name, :description)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);
        return $stmt->execute();
    }

    public function deleteService($id) {
        $stmt = $this->db->prepare("DELETE FROM services WHERE id = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}