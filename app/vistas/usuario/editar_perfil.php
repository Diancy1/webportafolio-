<?php
session_start();
require_once(__DIR__ . '/../../../conexion/db.php');

// Validar sesión
if (!isset($_SESSION['id'])) {
    header("Location: ../../login.php");
    exit;
}

$usuario_id = $_SESSION['id'];
$conexion = Conexion::conectar();

// Obtener datos actuales
$stmt = $conexion->prepare("SELECT nombre, correo, datos_personales FROM usuarios WHERE id = ?");
$stmt->execute([$usuario_id]);
$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

// Guardar cambios
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'] ?? '';
    $correo = $_POST['correo'] ?? '';
    $datos_personales = $_POST['datos_personales'] ?? '';

    $update = $conexion->prepare("UPDATE usuarios SET nombre = ?, correo = ?, datos_personales = ? WHERE id = ?");
    $update->execute([$nombre, $correo, $datos_personales, $usuario_id]);

    header("Location: perfil.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Perfil</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="/recursos/css/editar_perfil.css">
</head>
<body>
    <div class="container">
        <h2><i class="fas fa-user-edit"></i> Editar Perfil</h2>
        <form method="POST">
            <label><i class="fas fa-user icon-label"></i>Nombre:</label>
            <input type="text" name="nombre" value="<?= htmlspecialchars($usuario['nombre']) ?>" required>

            <label><i class="fas fa-envelope icon-label"></i>Correo:</label>
            <input type="email" name="correo" value="<?= htmlspecialchars($usuario['correo']) ?>" required>

            <label><i class="fas fa-info-circle icon-label"></i>Datos personales:</label>
            <textarea name="datos_personales" rows="5"><?= htmlspecialchars($usuario['datos_personales'] ?? '') ?></textarea>

            <button type="submit"><i class="fas fa-save"></i> Guardar Cambios</button>
        </form>

        <a href="perfil.php" class="back-link"><i class="fas fa-arrow-left"></i> Volver a mi perfil</a>
    </div>
</body>
</html>
