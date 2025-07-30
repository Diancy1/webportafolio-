<?php
require_once(__DIR__ . '/../../conexion/db.php');

class ActividadModelo
{
    private $db;

    public function __construct()
    {
        $this->db = Conexion::conectar();
    }

    public function guardar($titulo, $descripcion, $semana, $archivo, $usuario_id)
    {
        $stmt = $this->db->prepare("INSERT INTO actividades (titulo, descripcion, semana, archivo, usuario_id)
                                    VALUES (?, ?, ?, ?, ?)");
        return $stmt->execute([$titulo, $descripcion, $semana, $archivo, $usuario_id]);
    }

    public function obtenerPorUsuario($usuario_id)
    {
        $stmt = $this->db->prepare("SELECT * FROM actividades WHERE usuario_id = ? ORDER BY semana ASC");
        $stmt->execute([$usuario_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerTodas()
    {
        $stmt = $this->db->query("SELECT a.*, u.nombre FROM actividades a JOIN usuarios u ON a.usuario_id = u.id ORDER BY semana ASC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function eliminar($id)
    {
        // Obtener nombre del archivo para eliminarlo del disco
        $stmt = $this->db->prepare("SELECT archivo FROM actividades WHERE id = ?");
        $stmt->execute([$id]);
        $archivo = $stmt->fetchColumn();

        // Eliminar archivo del servidor
        if ($archivo && file_exists(__DIR__ . '/../../public/uploads/' . $archivo)) {
            unlink(__DIR__ . '/../../public/uploads/' . $archivo);
        }

        // Eliminar de la base de datos
        $stmt = $this->db->prepare("DELETE FROM actividades WHERE id = ?");
        return $stmt->execute([$id]);
    }

    public function obtenerPorId($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM actividades WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function actualizar($id, $titulo, $descripcion, $semana)
    {
        $stmt = $this->db->prepare("UPDATE actividades SET titulo = ?, descripcion = ?, semana = ? WHERE id = ?");
        return $stmt->execute([$titulo, $descripcion, $semana, $id]);
    }

}


