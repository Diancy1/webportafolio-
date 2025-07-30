<?php
class Conexion {
    public static function conectar() {
        try {
            $pdo = new PDO("mysql:host=localhost;dbname=portafolio;charset=utf8mb4", "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }
}
