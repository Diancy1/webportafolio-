<?php
require_once(__DIR__ . '/../../controladores/ActividadControlador.php');
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$controlador = new ActividadControlador();
$actividades = $controlador->listar();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mis Actividades</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="/recursos/css/lista.css">
</head>
<body class="actividades-page">

    <h2 class="titulo-actividades"><i class="fas fa-tasks"></i> Mis Actividades</h2>

    <?php if (!empty($actividades)): ?>
        <?php foreach ($actividades as $a): ?>
            <div class="actividad">
                <strong><i class="fas fa-file-alt"></i> <?= htmlspecialchars($a['titulo']); ?></strong><br>
                <p><?= htmlspecialchars($a['descripcion']); ?></p>
                <p><i class="fas fa-calendar-week"></i> Semana: <?= $a['semana']; ?></p>

                <div class="links">
                    <a href="../../../public/uploads/<?= htmlspecialchars($a['archivo']); ?>" target="_blank">
                        <i class="fas fa-eye"></i> Ver PDF
                    </a>

                    <a href="../../../public/uploads/<?= htmlspecialchars($a['archivo']); ?>" download>
                        <i class="fas fa-download"></i> Descargar
                    </a>
                </div>

                <?php if ($_SESSION['rol'] === 'admin'): ?>
                    <p class="subido-por"><i class="fas fa-user-shield"></i> Subido por: <?= htmlspecialchars($a['nombre'] ?? ''); ?></p>
                <?php endif; ?>

                <div class="acciones">
                    <form method="POST" action="../../controladores/ActividadControlador.php" onsubmit="return confirm('¿Estás seguro de eliminar esta actividad?');">
                        <input type="hidden" name="accion" value="eliminar">
                        <input type="hidden" name="id" value="<?= $a['id']; ?>">
                        <button type="submit" class="btn-eliminar"><i class="fas fa-trash-alt"></i> Eliminar</button>
                    </form>

                    <a href="editar.php?id=<?= $a['id']; ?>" class="btn-editar"><i class="fas fa-edit"></i> Editar</a>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p class="sin-actividades"><i class="fas fa-info-circle"></i> No hay actividades todavía.</p>
    <?php endif; ?>

    <a class="volver-btn" href="../dashboard/admin.php"><i class="fas fa-arrow-left"></i> Volver al panel</a>

</body>
</html>
