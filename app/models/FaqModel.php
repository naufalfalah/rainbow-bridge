<?php

require_once __DIR__ . '/Model.php';

class FaqModel extends Model {
    public function getFaqs() {
        $stmt = $this->db->prepare("SELECT * FROM faqs ORDER BY created_at DESC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getFaqById($id) {
        $stmt = $this->db->prepare("SELECT * FROM faqs WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function createFaq($question, $answer) {
        $stmt = $this->db->prepare("INSERT INTO faqs (question, answer) VALUES (:question, :answer)");
        $stmt->bindParam(':question', $question);
        $stmt->bindParam(':answer', $answer);
        return $stmt->execute();
    }

    public function updateFaq($id, $question, $answer) {
        $stmt = $this->db->prepare("UPDATE faqs SET question = :question, answer = :answer WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':question', $question);
        $stmt->bindParam(':answer', $answer);
        return $stmt->execute();
    }

    public function deleteFaq($id) {
        $stmt = $this->db->prepare("DELETE FROM faqs WHERE id = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}