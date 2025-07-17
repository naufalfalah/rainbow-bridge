<?php

require_once __DIR__ . '/Model.php';

class OrderModel extends Model {
    public function getOrders() {
        $stmt = $this->db->prepare("SELECT * FROM orders ORDER BY created_at DESC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createOrder($username, $email, $password) {
        $stmt = $this->db->prepare("INSERT INTO orders (username, email, password) VALUES (:username, :email, :password)");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', password_hash($password, PASSWORD_BCRYPT));
        return $stmt->execute();
    }
}