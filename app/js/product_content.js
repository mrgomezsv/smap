// product_content.js

document.addEventListener("DOMContentLoaded", function() {
    const productForm = document.getElementById("product-form");
    const imageInput = document.getElementById("imagenes-adicionales");
    const previewImages = document.getElementById("preview-images");

    // Muestra el formulario al hacer clic en "Cargar Producto"
    document.getElementById("cargar-producto").addEventListener("click", function() {
        productForm.classList.remove("hidden");
    });

    // Muestra las imágenes seleccionadas antes de enviar el formulario
    imageInput.addEventListener("change", function() {
        previewImages.innerHTML = ""; // Limpiar la vista previa anterior

        const files = imageInput.files;
        for (let i = 0; i < files.length; i++) {
            const file = files[i];
            if (file.type.startsWith("image/")) {
                const reader = new FileReader();
                reader.onload = function(event) {
                    const img = document.createElement("img");
                    img.src = event.target.result;
                    img.classList.add("preview-image"); // Agrega clase para aplicar estilos si es necesario
                    previewImages.appendChild(img);
                };
                reader.readAsDataURL(file);
            }
        }
        previewImages.classList.remove("hidden");
    });

    // Envía el formulario
    productForm.addEventListener("submit", function(event) {
        event.preventDefault();
        // Aquí puedes agregar la lógica para enviar el formulario, por ejemplo, a través de AJAX
        // Por ahora, simplemente imprime los datos en la consola
        const formData = new FormData(productForm);
        for (const [key, value] of formData.entries()) {
            console.log(key + ": " + value);
        }
    });
});
