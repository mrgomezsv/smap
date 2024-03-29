<?php
session_start();

// Verificar si se han enviado datos de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conexión a la base de datos
    $mysqli = new mysqli("db", "root", "example", "system_administration_smap");

    // Verificar conexión
    if ($mysqli->connect_error) {
        die("Error de conexión a la base de datos: " . $mysqli->connect_error);
    }

    // Obtener datos del formulario
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Consulta SQL para verificar las credenciales del usuario
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $mysqli->query($query);

    // Verificar si se encontró un usuario con las credenciales proporcionadas
    if ($result->num_rows == 1) {
        // Iniciar sesión y redirigir al dashboard
        $_SESSION["username"] = $username;
        header("location: dashboard.php");
    } else {
        // Mostrar mensaje de error si las credenciales son incorrectas
        echo "Usuario o contraseña incorrectos.";
    }

    // Cerrar conexión
    $mysqli->close();
}
?>
