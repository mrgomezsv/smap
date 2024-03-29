// Agrega este script en tu archivo "scripts.js"

// Función para cerrar sesión
function logout() {
    // Hacer una solicitud AJAX al archivo logout.php para cerrar la sesión
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "logout.php", true);
    xhr.onload = function() {
        // Redirigir a la página de inicio de sesión después de cerrar sesión
        window.location.href = "login.php";
    };
    xhr.send();
}

// Función para mostrar/ocultar el menú desplegable
function toggleDropdown() {
    var dropdownMenu = document.getElementById("dropdownMenu");
    dropdownMenu.classList.toggle("show");
}

// Agregar evento de clic al enlace de cerrar sesión
document.getElementById("logout").addEventListener("click", function(event) {
    event.preventDefault(); // Prevenir el comportamiento predeterminado del enlace
    logout(); // Llamar a la función de cerrar sesión cuando se hace clic en el enlace
});

// Cerrar el menú desplegable cuando se hace clic fuera de él
window.onclick = function(event) {
    if (!event.target.matches('.profile-info')) {
        var dropdowns = document.getElementsByClassName("dropdown-menu");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
};
