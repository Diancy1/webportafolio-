<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: ../../login.php");
    exit;
}

require_once(__DIR__ . '/../../../conexion/db.php');

$usuario_id = $_SESSION['id'];
$db = Conexion::conectar();
$stmt = $db->prepare("SELECT nombre, correo, rol FROM usuarios WHERE id = :id");
$stmt->bindParam(':id', $usuario_id, PDO::PARAM_INT);
$stmt->execute();
$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$usuario) {
    echo "Usuario no encontrado.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Perfil</title>
    <link rel="stylesheet" href="/recursos/css/perfil.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
   
</head>
<body>
    <div class="perfil-container">
        <h1><i class="fas fa-user-circle"></i> Mi Perfil</h1>
        
        <div class="dato"><i class="fas fa-user"></i><strong>Nombre:</strong> <?= htmlspecialchars($usuario['nombre']) ?></div>
        <div class="dato"><i class="fas fa-envelope"></i><strong>Correo:</strong> <?= htmlspecialchars($usuario['correo']) ?></div>
        <div class="dato"><i class="fas fa-user-tag"></i><strong>Rol:</strong> <?= htmlspecialchars($usuario['rol']) ?></div>

        <div class="botones">
            <a class="boton" href="../usuario/editar_perfil.php"><i class="fas fa-edit"></i>Editar</a>
            <a class="boton" href="../dashboard/admin.php"><i class="fas fa-arrow-left"></i>Volver al panel</a>
        </div>
    </div>
</body>
</html>
