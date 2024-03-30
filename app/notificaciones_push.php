<!-- envio_notificaciones.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar Notificación Push</title>
    <link rel="stylesheet" href="./css/notificaciones_push.css">
</head>
<body>
<h2>Enviar Notificación Push</h2>
        <p>Aquí se administrarán, publicarán y cargarán los productos.</p>
    <nav class="product-nav">
        <button class="nav-button">Opcion 1</button>
        <button class="nav-button">Opcion 2</button>
        <button class="nav-button">Opción 3</button>
        <button class="nav-button">Opción 4</button>
    </nav>
    <form id="push-form">
        <label for="titulo">Título:</label><br>
        <input type="text" id="titulo" name="titulo" required><br>
        <label for="mensaje">Mensaje:</label><br>
        <textarea id="mensaje" name="mensaje" required></textarea><br>
        <label for="destinatario">Token del Dispositivo:</label><br>
        <input type="text" id="destinatario" name="destinatario" required><br>
        <label for="click_action">Acción al hacer clic:</label><br>
        <input type="text" id="click_action" name="click_action"><br>
        <label for="icon">Ícono:</label><br>
        <input type="text" id="icon" name="icon"><br>
        <button type="submit">Enviar Notificación</button>
    </form>
    <script src="ruta/a/tu/archivo.js"></script> <!-- Enlaza tu archivo JavaScript aquí -->
</body>
</html>
