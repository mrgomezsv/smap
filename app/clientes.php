<!-- clientes.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link rel="stylesheet" href="./css/clientes.css">
</head>
<body>
    <h2>Clientes</h2>
    <nav class="product-nav">
        <button class="nav-button">Opcion 1</button>
        <button class="nav-button">Opcion 2</button>
        <button class="nav-button">Opción 3</button>
        <button class="nav-button">Opción 4</button>
    </nav>
    <div class="client-table">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Teléfono</th>
                    <th>Email</th>
                    <th>Dirección</th>
                    <th>Otros</th>
                </tr>
            </thead>
            <tbody id="client-list">
                <!-- Aquí se cargarán dinámicamente los clientes -->
                <tr>
                    <td>1</td>
                    <td>Cliente 1</td>
                    <td>123456789</td>
                    <td>cliente1@example.com</td>
                    <td>Dirección 1</td>
                    <td>Otros detalles 1</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Cliente 2</td>
                    <td>987654321</td>
                    <td>cliente2@example.com</td>
                    <td>Dirección 2</td>
                    <td>Otros detalles 2</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Cliente 3</td>
                    <td>987654321</td>
                    <td>cliente2@example.com</td>
                    <td>Dirección 3</td>
                    <td>Otros detalles 3</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Cliente 4</td>
                    <td>987654321</td>
                    <td>cliente2@example.com</td>
                    <td>Dirección 4</td>
                    <td>Otros detalles 4</td>
                </tr>
                <!-- Aquí se agregan los datos de los otros clientes -->
            </tbody>
        </table>
    </div>
</body>
</html>
