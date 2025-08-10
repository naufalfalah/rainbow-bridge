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

    public function createOrder($ownerName, $address, $animalType, $petName, $religion, $birthDate, $weight, $deathDate, $deathReason, $floatTake, $ashPot, $totalCost) {
        $sql = "INSERT INTO orders (owner_name, address, animal_type, pet_name, religion, birth_date, weight, death_date, death_reason, float_take, ash_pot, total_cost) 
            VALUES (:owner_name, :address, :animal_type, :pet_name, :religion, :birth_date, :weight, :death_date, :death_reason, :float_take, :ash_pot, :total_cost)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':owner_name', $ownerName);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':animal_type', $animalType);
        $stmt->bindParam(':pet_name', $petName);
        $stmt->bindParam(':religion', $religion);
        $stmt->bindParam(':birth_date', $birthDate);
        $stmt->bindParam(':weight', $weight);
        $stmt->bindParam(':death_date', $deathDate);
        $stmt->bindParam(':death_reason', $deathReason);
        $stmt->bindParam(':float_take', $floatTake);
        $stmt->bindParam(':ash_pot', $ashPot);
        $stmt->bindParam(':total_cost', $totalCost);
        return $stmt->execute();
    }

    // Update a order
    public function updateOrder($id, $ownerName, $address, $animalType, $petName, $religion, $birthDate, $weight, $deathDate, $deathReason, $floatTake, $ashPot, $totalCost) {
        $sql = "UPDATE orders 
            SET owner_name = :owner_name, 
                address = :address,
                animal_type = :animal_type,
                pet_name = :pet_name, 
                religion = :religion, 
                birth_date = :birth_date, 
                weight = :weight, 
                death_date = :death_date, 
                death_reason = :death_reason, 
                float_take = :float_take, 
                ash_pot = :ash_pot
                total_cost = :total_cost
        WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':owner_name', $ownerName);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':animal_type', $animalType);
        $stmt->bindParam(':pet_name', $petName);
        $stmt->bindParam(':religion', $religion);
        $stmt->bindParam(':birth_date', $birthDate);
        $stmt->bindParam(':weight', $weight);
        $stmt->bindParam(':death_date', $deathDate);
        $stmt->bindParam(':death_reason', $deathReason);
        $stmt->bindParam(':float_take', $floatTake);
        $stmt->bindParam(':ash_pot', $ashPot);
        $stmt->bindParam(':total_cost', $totalCost);
        return $stmt->execute();
    }

    // Delete a order
    public function deleteOrder($id) {
        $sql = "DELETE FROM orders WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public function getTotalRevenue() {
        $currentMonth = date('m');
        $currentYear = date('Y');
    
        $sql = "SELECT SUM(total_cost) AS total_revenue 
            FROM orders 
            WHERE MONTH(created_at) = :currentMonth 
            AND YEAR(created_at) = :currentYear";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':currentMonth', $currentMonth, PDO::PARAM_INT);
        $stmt->bindParam(':currentYear', $currentYear, PDO::PARAM_INT);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result && $result['total_revenue'] ? $result['total_revenue'] : 0;
    }
}