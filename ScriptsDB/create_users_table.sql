CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    fullname VARCHAR(100) NOT NULL,
    role VARCHAR(50) NOT NULL
);

INSERT INTO users (username, password, fullname, role)
VALUES ('mrgomez', 'Karin2100', 'Mario Roberto', 'dev');

CREATE TABLE product (
    id SERIAL PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    category INTEGER NOT NULL,
    featured_image VARCHAR(255),
    description TEXT,
    additional_images TEXT[]
);

INSERT INTO product (title, category, featured_image, description, additional_images)
VALUES ('Producto Ejemplo 1', 1, 'ruta/a/imagen/principal.jpg', 'Descripción del producto', ARRAY['ruta/a/imagen1.jpg', 'ruta/a/imagen2.jpg']);

INSERT INTO product (title, category, featured_image, description, additional_images)
VALUES ('Producto Ejemplo 2', 1, 'ruta/a/imagen/principal.jpg', 'Descripción del producto', ARRAY['ruta/a/imagen1.jpg', 'ruta/a/imagen2.jpg']);

INSERT INTO product (title, category, featured_image, description, additional_images)
VALUES ('Producto Ejemplo 3', 1, 'ruta/a/imagen/principal.jpg', 'Descripción del producto', ARRAY['ruta/a/imagen1.jpg', 'ruta/a/imagen2.jpg']);

INSERT INTO product (title, category, featured_image, description, additional_images)
VALUES ('Producto Ejemplo 4', 1, 'ruta/a/imagen/principal.jpg', 'Descripción del producto', ARRAY['ruta/a/imagen1.jpg', 'ruta/a/imagen2.jpg']);

INSERT INTO product (title, category, featured_image, description, additional_images)
VALUES ('Producto Ejemplo 5', 1, 'ruta/a/imagen/principal.jpg', 'Descripción del producto', ARRAY['ruta/a/imagen1.jpg', 'ruta/a/imagen2.jpg']);

INSERT INTO product (title, category, featured_image, description, additional_images)
VALUES ('Producto Ejemplo 6', 1, 'ruta/a/imagen/principal.jpg', 'Descripción del producto', ARRAY['ruta/a/imagen1.jpg', 'ruta/a/imagen2.jpg']);

INSERT INTO product (title, category, featured_image, description, additional_images)
VALUES ('Producto Ejemplo 7', 1, 'ruta/a/imagen/principal.jpg', 'Descripción del producto', ARRAY['ruta/a/imagen1.jpg', 'ruta/a/imagen2.jpg']);

INSERT INTO product (title, category, featured_image, description, additional_images)
VALUES ('Producto Ejemplo 8', 1, 'ruta/a/imagen/principal.jpg', 'Descripción del producto', ARRAY['ruta/a/imagen1.jpg', 'ruta/a/imagen2.jpg']);

INSERT INTO product (title, category, featured_image, description, additional_images)
VALUES ('Producto Ejemplo 9', 1, 'ruta/a/imagen/principal.jpg', 'Descripción del producto', ARRAY['ruta/a/imagen1.jpg', 'ruta/a/imagen2.jpg']);

INSERT INTO product (title, category, featured_image, description, additional_images)
VALUES ('Producto Ejemplo 10', 1, 'ruta/a/imagen/principal.jpg', 'Descripción del producto', ARRAY['ruta/a/imagen1.jpg', 'ruta/a/imagen2.jpg']);

