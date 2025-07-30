<?php
$c = $_GET['c'] ?? 'login';
$a = $_GET['a'] ?? 'index';
$b = $_GET['b'] ?? 'actividad';

$controlador = ucfirst($c) . 'Controlador'; // Ej: ActividadControlador
$ruta = "app/controladores/$controlador.php";

if (file_exists($ruta)) {
    require_once $ruta;
    $obj = new $controlador();

    if (method_exists($obj, $a)) {
        $obj->$a();
    } else {
        echo "Método '$a' no encontrado.";
    }
} else {
    echo "Controlador '$controlador' no encontrado.";
}
?>


