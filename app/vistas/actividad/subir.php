<?php
session_start();
if ($_SESSION['rol'] !== 'admin') {
    header('Location: ../dashboard/usuario.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Subir Actividad</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="/recursos/css/subir.css">
</head>

<body>

    <div class="form-container">
        <h2><i class="fas fa-upload"></i> Subir Actividad</h2>

        <form action="../../controladores/ActividadControlador.php?accion=subir" method="POST" enctype="multipart/form-data">

            <div class="icon-label"><i class="fas fa-heading"></i><label for="titulo">Título:</label></div>
            <input type="text" name="titulo" id="titulo" required>

            <div class="icon-label"><i class="fas fa-align-left"></i><label for="descripcion">Descripción:</label></div>
            <textarea name="descripcion" id="descripcion" required></textarea>

            <div class="icon-label"><i class="fas fa-calendar-week"></i><label for="semana">Semana:</label></div>
            <input type="number" name="semana" id="semana" required>

            <div class="icon-label"><i class="fas fa-file-pdf"></i><label for="archivo">Archivo PDF:</label></div>
            <input type="file" name="archivo" id="archivo" accept=".pdf" required>
        
            <button type="submit"><i class="fas fa-paper-plane"></i> Subir</button>
  
            <a class="volver-btn" href="../dashboard/admin.php"><i class="fas fa-arrow-left"></i> Volver al panel</a>
        </form>
    </div>

</body>

</html>