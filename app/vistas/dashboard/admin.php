<?php
session_start();
if (!isset($_SESSION['id']) || $_SESSION['rol'] !== 'admin') {
    header('Location: ../../login.php');
    exit;
}
?>
<head>
    <meta charset="UTF-8">
    <title>Panel Administrador</title>
    <link rel="stylesheet" href="/recursos/css/admin.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <!-- Botón para mostrar/ocultar sidebar -->
    <button class="toggle-btn" id="menuToggle">
        <i class='bx bx-menu'></i>
    </button>

    <aside class="sidebar" id="sidebar">
        <div>
            <header>
                <h2>Bienvenido, <?= htmlspecialchars($_SESSION['nombre']) ?> (Admin)</h2>
            </header>

            <nav>
                <ul>
                    <li><a href="../actividad/subir.php"><i class='bx bx-upload'></i> Subir Actividad</a></li>
                    <li><a href="../actividad/lista.php"><i class='bx bx-folder'></i> Ver Actividades</a></li>
                    <li><a href="../usuario/perfil.php"><i class='bx bx-user'></i> Mi Perfil</a></li>
                    <li><a href="/logout.php"><i class='bx bx-log-out'></i> Cerrar sesión</a></li>
                </ul>
            </nav>
        </div>

        <div class="redes">
            <a href="#"><i class='bx bxl-facebook'></i></a>
            <a href="#"><i class='bx bxl-twitter'></i></a>
            <a href="#"><i class='bx bxl-instagram'></i></a>
            <a href="#"><i class='bx bxl-linkedin'></i></a>
        </div>
    </aside>

    <main class="admin-main">
        <h1>Panel de Administración</h1>
        <p>Este es tu panel de administración. Aquí podrás gestionar todo: actividades, usuarios, y más.</p>
        <br>
        <p>Utiliza el menú lateral para acceder a las diferentes secciones del sistema.</p>
    </main>

   <script src="/recursos/js/menu.js"></script>
</body>
