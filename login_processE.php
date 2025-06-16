<?php
session_start();
header('Content-Type: text/html; charset=UTF-8');

// Conexión a la base de datos
$mysql = new mysqli("localhost", "root", "", "hospital");

// Verificar la conexión
if ($mysql->connect_error) {
    die("Error de conexión: " . $mysql->connect_error);
}

// Obtener datos del formulario de manera segura
$nombre_usuario = isset($_POST['usuario']) ? $_POST['usuario'] : '';
$id = isset($_POST['id']) ? $_POST['id'] : '';

// Validar que los campos no estén vacíos
if (empty($nombre_usuario) || empty($id)) {
    echo "<script>alert('Por favor, complete todos los campos.');
    window.location.href = 'empleado.php';</script>";
    exit;
}

// Buscar el usuario en la base de datos utilizando consultas preparadas
$stmt = $mysql->prepare("SELECT * FROM medico WHERE Nombre_medico = ?");
$stmt->bind_param("s", $nombre_usuario);
$stmt->execute();
$result = $stmt->get_result();

// Verificar si se encontró el usuario
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc(); // Obtener la fila de resultados

    // Verificar el ID
    if ($id == $row['Id_medico']) {
        // Inicio de sesión exitoso: Establecer variables de sesión
        $_SESSION['usuario'] = $row['Nombre_medico'];

        // Redirigir al inicio del empleado
        header("Location: inicioE.php");
        exit;
    } else {
        // ID incorrecto
        echo "<script>alert('ID incorrecto.');
        window.location.href = 'empleado.php';</script>";
    }
} else {
    // Usuario no encontrado
    echo "<script>alert('Usuario no encontrado.');
    window.location.href = 'empleado.php';</script>";
}

// Cerrar la conexión y liberar recursos
$stmt->close();
$mysql->close();
?>
