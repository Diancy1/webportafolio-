<?php
require_once(__DIR__ . '/../../conexion/db.php');

class Usuario {
    public static function verificarLogin($correo, $contrasena) {
        $conexion = Conexion::conectar();
        $sql = "SELECT * FROM usuarios WHERE correo = :correo AND contrasena = SHA1(:contrasena)";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':correo', $correo);
        $stmt->bindParam(':contrasena', $contrasena);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
