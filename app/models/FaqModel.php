<?php

require_once __DIR__ . '/Model.php';

class FaqModel extends Model {
    public function getFaqs() {
        $stmt = $this->db->prepare("SELECT * FROM faqs ORDER BY created_at DESC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addFaq($question, $answer) {
        $stmt = $this->db->prepare("INSERT INTO faqs (question, answer) VALUES (:question, :answer)");
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