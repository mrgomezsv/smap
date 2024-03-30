function toggleDropdown() {
    var dropdownMenu = document.getElementById("dropdownMenu");
    if (dropdownMenu.style.display === "none" || dropdownMenu.style.display === "") {
        dropdownMenu.style.display = "block";
    } else {
        dropdownMenu.style.display = "none";
    }
}

// Cerrar el menú si se hace clic fuera de él
window.onclick = function(event) {
    var dropdownMenu = document.getElementById("dropdownMenu");
    if (event.target.closest('.user-profile') === null && dropdownMenu.style.display === "block") {
        dropdownMenu.style.display = "none";
    }
}

document.getElementById("opcion1").addEventListener("click", function() {
    fetch('productos_content.php') // Carga el contenido desde el archivo productos_content.php
    .then(response => response.text())
    .then(data => {
        document.getElementById("contenido").innerHTML = data;
    });
});

<!-- Dashboard.php -->
document.getElementById("opcion2").addEventListener("click", function() {
    fetch('notificaciones_push.php') // Carga el formulario desde el archivo envio_notificaciones.php
    .then(response => response.text())
    .then(data => {
        document.getElementById("contenido").innerHTML = data;
    });
});


<!-- Dashboard.php -->
document.getElementById("opcion3").addEventListener("click", function() {
    fetch('clientes.php') // Carga el contenido desde el archivo clientes.php
    .then(response => response.text())
    .then(data => {
        document.getElementById("contenido").innerHTML = data;
    });
});


document.getElementById("opcion4").addEventListener("click", function() {
    document.getElementById("contenido").innerHTML = "<h2>Contenido Opción 4</h2><p>Este es el contenido de la Opción 4.</p>";
});

document.getElementById("opcion5").addEventListener("click", function() {
    fetch('descargo_responsabilidad.php')
    .then(response => response.text())
    .then(data => {
        document.getElementById("contenido").innerHTML = data;
    });
});

document.getElementById("opcion6").addEventListener("click", function() {
    document.getElementById("contenido").innerHTML = "<h2>Contenido Opción 6</h2><p>Este es el contenido de la Opción 6.</p>";
});

document.getElementById("opcion7").addEventListener("click", function() {
    document.getElementById("contenido").innerHTML = "<h2>Contenido Opción 7</h2><p>Este es el contenido de la Opción 7.</p>";
});
