<?php
session_start();

if (!isset($_SESSION['rol'])) {
    header('Location: index.php?c=login&a=index');
    exit;
}

$rol = $_SESSION['rol'];

if ($rol === 'admin') {
    header('Location: app/vistas/dashboard/admin.php');
} elseif ($rol === 'usuario') {
    header('Location: app/vistas/dashboard/usuario.php');
} else {
    echo "Rol no reconocido";
}

?>

