<?php
class Database {
    private static $host = "localhost";
    private static $dbname = "pokedex";
    private static $user = "root";
    private static $pass = "";

    public static function getConnection() {
        try {
            $conn = new PDO("mysql:host=".self::$host.";dbname=".self::$dbname, self::$user, self::$pass);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch(PDOException $e) {
            die("Erreur de connexion : " . $e->getMessage());
        }
    }
}
