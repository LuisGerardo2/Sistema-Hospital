<!-- login.php -->

<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['nombre'])) {
    header("Location: paciente.php"); // Redirigir a la página de inicio de sesión
    exit;
}

// Resto del código aquí
echo "Bienvenido, " . $_SESSION['username'];

?>
       <br> <a href="Formulario.html">Ir al menu</a> 

