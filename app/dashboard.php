<?php
// Verificar si el usuario ha iniciado sesión
session_start();
if (!isset($_SESSION["username"])) {
    // Si no ha iniciado sesión, redirigirlo al formulario de inicio de sesión
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Agrega aquí tus estilos CSS -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Bienvenido <?php echo $_SESSION["username"]; ?></h1>
        <!-- Agrega aquí tu barra de navegación o menú -->
        <nav>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Perfil</a></li>
                <li><a href="logout.php">Cerrar sesión</a></li> <!-- Agrega un enlace para cerrar sesión -->
            </ul>
        </nav>
    </header>
    
    <main>
        <!-- Agrega aquí el contenido principal del dashboard -->
        <p>Este es tu panel de control.</p>
    </main>

    <footer>
        <!-- Agrega aquí el pie de página -->
    </footer>
</body>
</html>
