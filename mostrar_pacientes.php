<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pacientes - Sanatorio Vargas</title>
    <link rel="stylesheet" href="estilos.css"> <!-- Asegúrate de que este archivo CSS esté disponible -->
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #F5F5F5;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        flex-direction: column;
    }

    .container {
        width: 80%;
        max-width: 1000px;
        margin-top: 20px;
    }

    .paciente-row {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
        gap: 20px; /* Espacio entre los recuadros */
    }

    .paciente {
        width: 48%; /* Cada recuadro ocupará el 48% del espacio */
        background-color: #FFFFFF;
        border-radius: 15px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin-bottom: 20px;
    }

    .izquierda {
        width: 30%;
        text-align: center;
    }

    .foto-paciente {
        width: 100%;
        max-width: 150px;
        height: auto;
        border-radius: 50%;
    }

    .derecha {
        width: 65%;
        text-align: left;
    }

    .derecha p {
        margin: 5px 0;
    }

    .derecha p strong {
        color: #2092B8;
    }

    button {
        padding: 10px 20px;
        background-color: #2092B8;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 20px;
    }

    button:hover {
        background-color: #157a94;
    }
    footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
        }

        footer a {
            color: #008080;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

</style>
<body>
    <div class="container">
        <?php
        // Iniciar sesión y conectar a la base de datos
        session_start();
        $mysql = new mysqli("localhost", "root", "", "hospital");

        // Verificar la conexión
        if ($mysql->connect_error) {
            die("Error de conexión: " . $mysql->connect_error);
        }

        // Consulta para obtener todos los pacientes
        $query = "SELECT * FROM paciente";
        $result = $mysql->query($query);

        // Verificar si hay resultados
        if ($result->num_rows > 0) {
            $count = 0;
            echo '<div class="paciente-row">';  // Iniciar la fila de pacientes
            
            while ($row = $result->fetch_assoc()) {
                // Mostrar la información de cada paciente
                echo '<div class="paciente">';
                

                
                // Mostrar los datos del paciente
                echo '<div class="derecha">';
                
                // Concatenar los campos del nombre
                $nombre_completo = $row['Nombre'];

                // Mostrar la información del paciente
                echo '<p><strong>NSS:</strong> ' . (isset($row['nss']) ? $row['nss'] : 'No disponible') . '</p>';
                echo '<p><strong>Nombre completo:</strong> ' . $nombre_completo . '</p>';
                echo '<p><strong>CURP:</strong> ' . (isset($row['curp']) ? $row['curp'] : 'No disponible') . '</p>';
                echo '<p><strong>Sexo:</strong> ' . (isset($row['Sexo']) ? $row['Sexo'] : 'No disponible') . '</p>';
                echo '<p><strong>Fecha de nacimiento:</strong> ' . (isset($row['fechaN']) ? $row['fechaN'] : 'No disponible') . '</p>';
                echo '<p><strong>Alergias:</strong> ' . (isset($row['Algergias']) ? $row['Algergias'] : 'No disponible') . '</p>';
                echo '<p><strong>Tipo de sangre:</strong> ' . (isset($row['sangre']) ? $row['sangre'] : 'No disponible') . '</p>';
                echo '<p><strong>Teléfono:</strong> ' . (isset($row['Tel_paciente']) ? $row['Tel_paciente'] : 'No disponible') . '</p>';
                echo '<p><strong>Domicilio:</strong> ' . (isset($row['Direcc_paciente']) ? $row['Direcc_paciente'] : 'No disponible') . '</p>';

                echo '</div>'; // Fin de los datos del paciente
                
                echo '</div>'; // Fin del div de paciente
                
                $count++;
                
                // Cada vez que se muestren dos pacientes, se crea una nueva fila
                if ($count % 2 == 0) {
                    echo '</div><div class="paciente-row">';  // Inicia una nueva fila
                }
            }

            echo '</div>';  // Cierra la última fila
        } else {
            echo '<p>No se encontraron pacientes.</p>';
        }

        // Cerrar la conexión
        $mysql->close();
        ?>
    </div>
    <footer>
            <a href="inicioE.php" class="button regresar">Regresar</a>
        </footer>
</body>
</html>
