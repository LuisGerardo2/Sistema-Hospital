-- Crear base de datos si no existe
CREATE DATABASE IF NOT EXISTS hos;
USE hos;

-- Crear la tabla de empleados
CREATE TABLE empleado (
    id INT PRIMARY KEY,  -- Identificador único
    nombre_usuario VARCHAR(50) NOT NULL, -- Nombre del usuario
    sexo ENUM('masculino', 'femenino') NOT NULL, -- Sexo del empleado
    ocupacion VARCHAR(20) NOT NULL, -- Ocupación del empleado
    area VARCHAR(20) NOT NULL, -- Área de trabajo
    telefono VARCHAR(20) NOT NULL, -- Teléfono del empleado
    domicilio VARCHAR(100) NOT NULL, -- Domicilio del empleado
    turno VARCHAR(20) NOT NULL -- Turno de trabajo
);

-- Insertar registros de prueba
INSERT INTO empleado (id, nombre_usuario, sexo, ocupacion, area, telefono, domicilio, turno)
VALUES 
(1, 'Ivan Hdez', 'masculino', 'Medico', 'Area pediatria', '2722255281', 'X', 'Nocturno'),

(2, 'Luis Gerardo', 'masculino', 'Medico', 'Area pediatria', '2721674268', 'X', 'Nocturno'),

(3, 'Patricia Bravo', 'femenino', 'Medico', 'Cirujano', '2721692551', 'X', 'Matutino'),

(4, 'Fernanda Hdez', 'femenino', 'Enfermero', 'Area pediatria', '2722307601', 'X', 'Matutino');
