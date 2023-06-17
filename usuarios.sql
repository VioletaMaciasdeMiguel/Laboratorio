CREATE TABLE `usuario` (
    `id` INT(10) AUTO_INCREMENT PRIMARY KEY,
    `nombre` VARCHAR(20),
    `apellido1` VARCHAR(20),
    `apellido2` VARCHAR(20),
    `email` VARCHAR(20)
    `contrasenia` VARCHAR(8),);
    
INSERT INTO usuario (nombre, apellido1, apellido2, contrasenia, email, id)
VALUES ('Antonio', 'Garcia', 'Garcia', '1234', 'antoniogarcia@gmail.com', '1');
