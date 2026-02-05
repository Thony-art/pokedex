<?php
require_once __DIR__ . "/../config/database.php";

class User {
    private $conn;

    public function __construct() {
        $this->conn = Database::getConnection();
    }

    public function create($username, $password) {
        try {
            $sql = "INSERT INTO user (username, password) VALUES (?, ?)";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$username, $password]);
        } catch (PDOException $e) {
            die("Erreur lors de l'inscription : " . $e->getMessage());
        }
    }

    public function getByUsername($username) {
        $sql = "SELECT * FROM user WHERE username = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$username]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
