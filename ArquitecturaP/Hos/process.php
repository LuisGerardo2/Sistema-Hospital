<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root"; // Ajusta estos valores según tu configuración
$password = "";
$dbname = "hospital";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
$nss = $_POST['nss'];
$sexo = $_POST['sexo'];
$nombre = $_POST['nombre']." ".$_POST['apellido_paterno']." ". $_POST['apellido_materno'];
$curp = $_POST['curp'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$alergias = $_POST['alergias'];
$tipo_sangre = $_POST['tipo_sangre'];
$domicilio = $_POST['domicilio'];
$telefono = $_POST['telefono'];
$recep = $_POST['Recepcionista'];

// Verificar si el NSS ya existe
$sql_check = "SELECT * FROM paciente WHERE nss = '$nss'";
$result = $conn->query($sql_check);

if ($result->num_rows > 0) {
    echo "<script>alert('El NSS ya está registrado. Por favor, ingresa un NSS válido.');
        window.location.href = 'registrar_paciente.php';</script>";
    
} else {
    // Insertar los datos en la base de datos
    $sql = "INSERT INTO paciente (nss, Sexo, Nombre, curp, fechaN, Algergias, sangre, Direcc_paciente, Tel_paciente,Id_recep) 
            VALUES ('$nss', '$sexo','$nombre', '$curp', '$fecha_nacimiento', '$alergias', '$tipo_sangre', '$domicilio', '$telefono','$recep')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Paciente registrado correctamente.');
        window.location.href = 'paciente.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Cerrar la conexión
$conn->close();
?>
