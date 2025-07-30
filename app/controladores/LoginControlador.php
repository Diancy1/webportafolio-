<?php
require_once(__DIR__ . '/../modelos/UsuarioModelo.php');

class LoginControlador {
    public function index() {
        require_once(__DIR__ . '/../vistas/login.php');
    }

    public function login() {
        session_start();

        $correo = $_POST['correo'] ?? '';
        $contrasena = $_POST['contrasena'] ?? '';

        $usuario = Usuario::verificarLogin($correo, $contrasena);

        if ($usuario) {
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['rol'] = $usuario['rol'];
            $_SESSION['nombre'] = $usuario['nombre'];

            header('Location: home.php');
        } else {
            $_SESSION['error'] = 'Credenciales incorrectas';
            header('Location: index.php?c=login&a=index');
        }
    }


    public function dashboard() {
    session_start();
    $usuario_id = $_SESSION['id'] ?? null;

    if (!$usuario_id) {
        header('Location: /login');
        exit;
    }

    $modeloActividad = new ActividadModelo();
    $actividades = $modeloActividad->obtenerPorUsuario($usuario_id);

    include(__DIR__ . '/../vistas/dashboard/usuario.php');
}


}
