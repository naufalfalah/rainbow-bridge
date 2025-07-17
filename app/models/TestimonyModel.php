<?php

require_once __DIR__ . '/Model.php';

class TestimonyModel extends Model {
    public function getTestimonies() {
        $stmt = $this->db->prepare("SELECT * FROM testimonies ORDER BY created_at DESC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addTestimony($name, $message) {
        $stmt = $this->db->prepare("INSERT INTO testimonies (name, message) VALUES (:name, :message)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':message', $message);
        return $stmt->execute();
    }

    public function deleteTestimony($id) {
        $stmt = $this->db->prepare("DELETE FROM testimonies WHERE id = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
