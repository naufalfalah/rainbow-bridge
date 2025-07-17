<?php

require_once 'Model.php';

class AdminModel extends Model {
    /**
     * Get user by username
     *
     * @param string $username
     * @return array|null
     */
    public function getUserByUsername($username) {
        try {
            // Prepare SQL query
            $stmt = $this->db->prepare("SELECT * FROM admins WHERE username = :username");
            $stmt->bindParam(':username', $username, PDO::PARAM_STR);
            $stmt->execute();

            // Fetch user data
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            return $user ?: null; // Return user data or null if not found
        } catch (PDOException $e) {
            // Handle database errors
            error_log("Database error: " . $e->getMessage());
            return null;
        }
    }

    /**
     * Create a new admin user
     *
     * @param string $username
     * @param string $password
     * @return bool
     */
    public function createAdmin($username, $password) {
        try {
            // Prepare SQL query
            $stmt = $this->db->prepare("INSERT INTO admins (username, password) VALUES (:username, :password)");
            $stmt->bindParam(':username', $username, PDO::PARAM_STR);
            $stmt->bindParam(':password', $password, PDO::PARAM_STR);

            // Execute the query
            return $stmt->execute();
        } catch (PDOException $e) {
            // Handle database errors
            error_log("Database error: " . $e->getMessage());
            return false;
        }
    }
}