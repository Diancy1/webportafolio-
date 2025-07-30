<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
    <!-- Iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    
    <!-- Estilos globales -->
    <link rel="stylesheet" href="/recursos/css/login.css">
</head>
<body>



    <div class="login-container">
        <h2><i class="fas fa-user-circle"></i> Iniciar Sesión</h2>
        <form action="index.php?c=login&a=login" method="POST">
            <div class="form-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="correo" placeholder="Correo electrónico" required>
            </div>
            <div class="form-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="contrasena" placeholder="Contraseña" required>
            </div>
            <button type="submit">Entrar</button>
        </form>
        <p>¿No tienes cuenta? Contacta con el administrador</p>
        <div class="redes">
            <a href="#"><i class='bx bxl-facebook'></i></a>
            <a href="#"><i class='bx bxl-twitter'></i></a>
            <a href="#"><i class='bx bxl-instagram'></i></a>
            <a href="#"><i class='bx bxl-linkedin'></i></a>
        </div>
    </div>

</body>
</html>
