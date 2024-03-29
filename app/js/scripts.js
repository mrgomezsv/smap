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
    document.getElementById("contenido").innerHTML = "<h2>Contenido Opción 1</h2><p>Este es el contenido de la Opción 1.</p>";
});

document.getElementById("opcion2").addEventListener("click", function() {
    document.getElementById("contenido").innerHTML = "<h2>Contenido Opción 2</h2><p>Este es el contenido de la Opción 2.</p>";
});

document.getElementById("opcion3").addEventListener("click", function() {
    document.getElementById("contenido").innerHTML = "<h2>Contenido Opción 3</h2><p>Este es el contenido de la Opción 3.</p>";
});

document.getElementById("opcion4").addEventListener("click", function() {
    document.getElementById("contenido").innerHTML = "<h2>Contenido Opción 4</h2><p>Este es el contenido de la Opción 4.</p>";
});

document.getElementById("opcion5").addEventListener("click", function() {
    document.getElementById("contenido").innerHTML = "<h2>Contenido Opción 5</h2><p>Este es el contenido de la Opción 5.</p>";
});

document.getElementById("opcion6").addEventListener("click", function() {
    document.getElementById("contenido").innerHTML = "<h2>Contenido Opción 6</h2><p>Este es el contenido de la Opción 6.</p>";
});

document.getElementById("opcion7").addEventListener("click", function() {
    document.getElementById("contenido").innerHTML = "<h2>Contenido Opción 7</h2><p>Este es el contenido de la Opción 7.</p>";
});
