<?php
require_once(__DIR__ . '/../../controladores/ActividadControlador.php');
if (session_status() === PHP_SESSION_NONE) session_start();

$controlador = new ActividadControlador();
$actividad = $controlador->obtenerPorId($_GET['id']);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Actividad</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="/recursos/css/editar.css">
</head>
<body>

<h2><i class="fas fa-edit"></i> Editar Actividad</h2>

<form method="POST" action="../../controladores/ActividadControlador.php">
    <input type="hidden" name="accion" value="actualizar">
    <input type="hidden" name="id" value="<?php echo $actividad['id']; ?>">

    <label for="titulo">Título:</label>
    <input type="text" id="titulo" name="titulo" value="<?php echo htmlspecialchars($actividad['titulo']); ?>" required>

    <label for="descripcion">Descripción:</label>
    <textarea id="descripcion" name="descripcion" rows="4" required><?php echo htmlspecialchars($actividad['descripcion']); ?></textarea>

    <label for="semana">Semana:</label>
    <input type="number" id="semana" name="semana" value="<?php echo $actividad['semana']; ?>" min="1" required>

    <button type="submit"><i class="fas fa-save"></i> Guardar Cambios</button>
</form>

<a class="volver-btn" href="../dashboard/admin.php"><i class="fas fa-arrow-left"></i> Volver al panel</a>

</body>
</html>
