<?php
// Conexión a la base de datos
$mysqli = new mysqli("db", "root", "example", "sistema_administracion");

// Verificar conexión
if ($mysqli->connect_error) {
    die("Error de conexión a la base de datos: " . $mysqli->connect_error);
}

// Verificar si se han enviado datos de registro
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $username = $_POST["username"];
    $password = $_POST["password"];
    $fullname = $_POST["fullname"];
    $role = $_POST["role"];

    // Consulta SQL para insertar el nuevo usuario en la base de datos
    $query = "INSERT INTO users (username, password, fullname, role) VALUES ('$username', '$password', '$fullname', '$role')";
    if ($mysqli->query($query) === TRUE) {
        echo "Usuario registrado exitosamente.";
    } else {
        echo "Error al registrar el usuario: " . $mysqli->error;
    }
}

// Cerrar conexión
$mysqli->close();
?>
