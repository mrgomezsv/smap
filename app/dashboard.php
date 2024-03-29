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
    <link rel="stylesheet" href="./css/style_dashboard.css">
</head>
<body>
    <header>
        <!-- <h1>Bienvenido <?php echo $_SESSION["username"]; ?></h1> -->
    </header>
    
    <body>
        <div class="dashboard">
            <div class="sidebar">
                <div class="title">
                    <p>Sistema de Manejo de Aplicaciones Móviles</p>
                    <h1>SMAP</h1>
                </div>
                <ul>
                    <div class="item-sidebar">
                        <li>
                            <p class="section-title">Section 1</p>
                            <a href="#" id="opcion1">Clientes</a>
                        </li>
                    </div>
                    <div class="item-sidebar">
                        <li>
                            <p class="section-title">Section 1</p>
                            <a href="#" id="opcion2">Envio de Notificaciones Push</a>
                        </li>
                    </div>
                    <div class="item-sidebar">
                        <li>
                            <p class="section-title">Section 1</p>
                            <a href="#" id="opcion3">Productos</a>
                        </li>
                    </div>
                    <div class="item-sidebar">
                        <li>
                            <p class="section-title">Section 1</p>
                            <a href="#" id="opcion4">Servicios</a>
                        </li>
                    </div>
                    <div class="item-sidebar">
                        <li>
                            <p class="section-title">Section 1</p>
                            <a href="#" id="opcion5">Descargo de Responsabilidad</a>
                        </li>
                    </div>
                    <div class="item-sidebar">
                        <li>
                            <p class="section-title">Section 1</p>
                            <a href="#" id="opcion6">Anticipos</a>
                        </li>
                    </div>
                    <div class="item-sidebar">
                        <li>
                            <p class="section-title">Section 1</p>
                            <a href="#" id="opcion7">Ticket Master</a>
                        </li>
                    </div>
                </ul>
                <div class="user-profile">
                    <div class="profile-info" onclick="toggleDropdown()">
                        <img src="./assets/profile.jpeg" alt="Imagen de Perfil">
                        <span>Bienvenido <?php echo $_SESSION["username"]; ?></span>
                    </div>
                    <div class="dropdown-menu" id="dropdownMenu">
                        <ul>
                            <li><a href="#">Perfil</a></li>
                            <li><a href="#" id="logout">Cerrar Sesión</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="content" id="contenido">
                <h2>Contenido</h2>
                <p>SMAP (Sistema de Manejo de Aplicaciones Móviles) es una plataforma desarrollada en PHP con MySQL y HTML para gestionar y administrar aplicaciones móviles. Proporciona herramientas para el manejo eficiente de diferentes aspectos relacionados con el ciclo de vida de las aplicaciones móviles, incluyendo el registro de usuarios, la gestión de contenido, el seguimiento de métricas y más. SMAP está diseñado para facilitar el proceso de desarrollo, lanzamiento y mantenimiento de aplicaciones móviles, ofreciendo una interfaz intuitiva y funcionalidades robustas.</p>
                <p>Seleccione una opción del menú lateral.</p>
            </div>
        </div>
        <script src="./js/scripts.js"></script>
        <script src="./js/dashboard.js"></script>
    </body>

    <footer>
        <!-- Pie de página -->
    </footer>
</body>
</html>
