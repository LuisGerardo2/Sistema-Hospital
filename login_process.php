<?php
session_start();
header('Content-Type: text/html; charset=UTF-8');

$mysql = new mysqli("localhost", "root", "", "hospital");

// Verificar la conexión
if ($mysql->connect_error) {
    die("Error de conexión: " . $mysql->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST['nombre']; 
$nss = $_POST['nss'];


// Buscar el usuario en la base de datos
$Query = "SELECT * FROM paciente WHERE nombre ='".$nombre."'";
$Result = $mysql->query($Query);

if ($Result === false) {
    die("Error al ejecutar la consulta: " . $mysql->error);
}

// Verificar si se encontró el usuario
if ($Result->num_rows > 0) {
    $row = $Result->fetch_assoc(); // Obtener la fila de resultados
    

    // Verificar la contraseña
    if ($nombre==$row['Nombre'] &&  $nss==$row['nss']) {
        // Contraseña correcta: Iniciar sesión y establecer variables de sesión
        
        $_SESSION['nombre'] = $nombre;

               //if($row['admin']=="false"){
        //    header("Location: Formulario.php");
        //}else if ($row['admin']=="true"){
        //    header("Location: menu-admin.php");
        //}
        
        header("Location: inicio.php"); // Redirigir a la página principal después de iniciar sesión
        exit; // Finalizar el script después de redirigir
    } else {
        // Contraseña incorrecta

        echo "<script>alert('Contraseña incorrecta.');
        </script>";
?>
       <br> <a href="index.php">Regresar al inicio</a> 
<?php
    }
} else {
    // Usuario no encontrado
   
    echo "<script>alert('Usuario no encontrado.');
    window.location.href = 'paciente.php';</script>";
?>
    <br> <a href="index.php">Regresar al inicio</a> 
<?php
    
    exit; // Finalizar el script después de redirigir
}

// Cerrar la conexión
$mysql->close();
?>
