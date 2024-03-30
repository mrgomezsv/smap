<!-- productos_content.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="./css/product_content.css">
</head>
<body>
    <h2>Productos</h2>
    <p>Aquí se administrarán, publicarán y cargarán los productos.</p>
    <nav class="product-nav">
        <button class="nav-button">Cargar Producto</button>
        <button class="nav-button">Crear Categoria</button>
        <button class="nav-button">Opción 3</button>
        <button class="nav-button">Opción 4</button>
    </nav>

    <div class="product-form-container">
        <button class="nav-button" id="cargar-producto">Cargar Producto</button>
        <form id="product-form" class="hidden">
            <label for="titulo">Título:</label><br>
            <input type="text" id="titulo" name="titulo" required><br>
            
            <label for="categoria">Categoría:</label><br>
            <select id="categoria" name="categoria" required>
                <option value="1">Categoría 1</option>
                <option value="2">Categoría 2</option>
                <option value="3">Categoría 3</option>
            </select><br>
            
            <label for="imagen-destacada">Imagen Destacada:</label><br>
            <input type="file" id="imagen-destacada" name="imagen-destacada" accept="image/*" required><br>
            
            <label for="descripcion">Descripción:</label><br>
            <textarea id="descripcion" name="descripcion" rows="4" maxlength="100" required></textarea><br>
            
            <label for="imagenes-adicionales">Imágenes Adicionales:</label><br>
            <input type="file" id="imagenes-adicionales" name="imagenes-adicionales[]" accept="image/*" multiple><br>
            
            <button type="submit">Guardar Producto</button>
        </form>
    </div>
    <div id="preview-images" class="hidden"></div>
    <script src="./js/product_content.js"></script>
</body>
</html>