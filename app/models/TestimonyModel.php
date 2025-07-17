<?php

require_once __DIR__ . '/Model.php';

class TestimonyModel extends Model {
    public function getTestimonies() {
        $stmt = $this->db->prepare("SELECT * FROM testimonies ORDER BY created_at DESC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getTestimonyById($id) {
        $stmt = $this->db->prepare("SELECT * FROM testimonies WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function createTestimony($author, $message) {
        $stmt = $this->db->prepare("INSERT INTO testimonies (author, message) VALUES (:author, :message)");
        $stmt->bindParam(':author', $author);
        $stmt->bindParam(':message', $message);
        return $stmt->execute();
    }

    public function updateTestimony($id, $author, $message) {
        $stmt = $this->db->prepare("UPDATE testimonies SET author = :author, message = :message WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':author', $author);
        $stmt->bindParam(':message', $message);
        return $stmt->execute();
    }

    public function deleteTestimony($id) {
        $stmt = $this->db->prepare("DELETE FROM testimonies WHERE id = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
