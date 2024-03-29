<?php
session_start();
session_unset(); // Eliminar todas las variables de sesión
session_destroy(); // Destruir la sesión
header("location: index.html"); // Redirigir al usuario a la página de inicio de sesión
exit;
?>
