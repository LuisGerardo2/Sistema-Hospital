<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario'])) {
    header("Location: empleado.php"); // Redirigir a la página de inicio de sesión
    exit;
}

// Mostrar un mensaje de bienvenida con el nombre de usuario
echo "Bienvenido, " . $_SESSION['usuario'];
?>
<br>
<a href="inicioE.html">Ir al menu</a>
