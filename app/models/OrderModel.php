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

    public function createOrder($ownerName, $petName, $religion, $birthDate, $weight, $deathDate, $deathReason, $floatTake, $ashPot) {
        $sql = "INSERT INTO orders (owner_name, pet_name, religion, birth_date, weight, death_date, death_reason, float_take, ash_pot) 
            VALUES (:owner_name, :pet_name, :religion, :birth_date, :weight, :death_date, :death_reason, :float_take, :ash_pot)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':owner_name', $ownerName);
        $stmt->bindParam(':pet_name', $petName);
        $stmt->bindParam(':religion', $religion);
        $stmt->bindParam(':birth_date', $birthDate);
        $stmt->bindParam(':weight', $weight);
        $stmt->bindParam(':death_date', $deathDate);
        $stmt->bindParam(':death_reason', $deathReason);
        $stmt->bindParam(':float_take', $floatTake);
        $stmt->bindParam(':ash_pot', $ashPot);
        return $stmt->execute();
    }

    // Update a order
    public function updateOrder($id, $ownerName, $petName, $religion, $birthDate, $weight, $deathDate, $deathReason, $floatTake, $ashPot) {
        $sql = "UPDATE orders 
            SET owner_name = :owner_name, 
                pet_name = :pet_name, 
                religion = :religion, 
                birth_date = :birth_date, 
                weight = :weight, 
                death_date = :death_date, 
                death_reason = :death_reason, 
                float_take = :float_take, 
                ash_pot = :ash_pot
        WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':owner_name', $ownerName);
        $stmt->bindParam(':pet_name', $petName);
        $stmt->bindParam(':religion', $religion);
        $stmt->bindParam(':birth_date', $birthDate);
        $stmt->bindParam(':weight', $weight);
        $stmt->bindParam(':death_date', $deathDate);
        $stmt->bindParam(':death_reason', $deathReason);
        $stmt->bindParam(':float_take', $floatTake);
        $stmt->bindParam(':ash_pot', $ashPot);
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