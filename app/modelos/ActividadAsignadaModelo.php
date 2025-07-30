<?php
require_once(__DIR__ . './../../conexion/db.php');

class ActividadAsignadaModelo {
    public static function listar() {
        $conexion = Conexion::conectar();
        $sql = "SELECT * FROM actividades_asignadas ORDER BY fecha_entrega ASC";
        $stmt = $conexion->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
