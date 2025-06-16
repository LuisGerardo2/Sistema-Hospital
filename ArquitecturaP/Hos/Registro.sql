SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE pacientes (
    nss VARCHAR(20) PRIMARY KEY,         -- NSS como clave primaria
    sexo ENUM('masculino', 'femenino') NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    apellido_paterno VARCHAR(100) NOT NULL,
    apellido_materno VARCHAR(100) NOT NULL,
    curp VARCHAR(20) NOT NULL,
    fecha_nacimiento DATE NOT NULL,
    alergias TEXT,
    tipo_sangre ENUM('A+', 'A-', 'B+', 'B-', 'O+', 'O-', 'AB+', 'AB-') DEFAULT NULL,
    domicilio TEXT,
    telefono VARCHAR(20) NOT NULL
);
    