<?php
require_once(__DIR__ . '');

class ActividadAsignadaControlador {
    public function index() {
        $actividades = ActividadAsignadaModelo::listar();
        require_once("./app/vistas/actividades/por_hacer.php");
    }
}
