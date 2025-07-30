<?php
require_once(__DIR__ . '/../modelos/ActividadModelo.php');

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

class ActividadControlador
{
    private $modelo;

    public function __construct()
    {
        $this->modelo = new ActividadModelo();
    }

    public function subir()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['id'])) {
            $titulo = $_POST['titulo'] ?? '';
            $descripcion = $_POST['descripcion'] ?? '';
            $semana = $_POST['semana'] ?? '';
            $usuario_id = $_SESSION['id'];

            $archivo = $_FILES['archivo'];
            $archivoNombre = '';

            if ($archivo['error'] === UPLOAD_ERR_OK) {
                $mime = mime_content_type($archivo['tmp_name']);
                if ($mime !== 'application/pdf') {
                    echo "Error: Solo se permiten archivos PDF.";
                    exit;
                }

                $archivoNombre = time() . "_" . basename($archivo['name']);
                move_uploaded_file($archivo['tmp_name'], __DIR__ . '/../../public/uploads/' . $archivoNombre);
            }

            $this->modelo->guardar($titulo, $descripcion, $semana, $archivoNombre, $usuario_id);
            header('Location: ../vistas/actividad/lista.php');
            exit;
        }
    }

    public function listar()
    {
        if ($_SESSION['rol'] === 'admin') {
            return $this->modelo->obtenerTodas();
        } else {
            return $this->modelo->obtenerPorUsuario($_SESSION['id']);
        }
    }

    public function eliminar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['accion'] === 'eliminar') {
            $id = $_POST['id'];
            $this->modelo->eliminar($id);
            header('Location: ../vistas/actividad/lista.php');
            exit();
        }
    }

    public function obtenerPorId($id)
    {
        return $this->modelo->obtenerPorId($id);
    }

    public function actualizar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['accion'] === 'actualizar') {
            $id = $_POST['id'];
            $titulo = $_POST['titulo'];
            $descripcion = $_POST['descripcion'];
            $semana = $_POST['semana'];

            $this->modelo->actualizar($id, $titulo, $descripcion, $semana);
            header('Location: ../vistas/actividad/lista.php');
            exit();
        }
    }
}

// Enrutador manual:
$accion = $_GET['accion'] ?? null;
$controlador = new ActividadControlador();

if ($accion === 'subir') {
    $controlador->subir();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['accion'] === 'eliminar') {
    $controlador->eliminar();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['accion'] === 'actualizar') {
    $controlador->actualizar();
}

