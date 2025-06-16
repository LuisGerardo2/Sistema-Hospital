<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados - Sanatorio Vargas</title>
    <link rel="stylesheet" href="estilos.css"> <!-- Asegúrate de que este archivo CSS esté disponible -->
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

        .empleado-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
            gap: 20px; /* Espacio entre los recuadros */
        }

        .empleado {
            width: 48%; /* Cada recuadro ocupará el 48% del espacio */
            background-color: #FFFFFF;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }

        .empleado p {
            margin: 5px 0;
        }

        .empleado p strong {
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
</head>
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

        // Consulta para obtener todos los empleados
        $query = "SELECT * FROM medico";
        $result = $mysql->query($query);

        // Verificar si hay resultados
        if ($result->num_rows > 0) {
            $count = 0;
            echo '<div class="empleado-row">';  // Iniciar la fila de empleados
            
            while ($row = $result->fetch_assoc()) {
                // Mostrar la información de cada empleado
                echo '<div class="empleado">';
                
                // Mostrar los datos del empleado
                echo '<p><strong>ID:</strong> ' . htmlspecialchars($row['Id_medico']) . '</p>';
                echo '<p><strong>Nombre de Usuario:</strong> ' . htmlspecialchars($row['Nombre_medico']) . '</p>';
                echo '<p><strong>Especialidad:</strong> ' . htmlspecialchars($row['Especialidad']) . '</p>';
                echo '<p><strong>Teléfono:</strong> ' . htmlspecialchars($row['Telefono_medico']) . '</p>';
                echo '<p><strong>Paciente:</strong> ' . htmlspecialchars($row['Id_paciente']) . '</p>';

                echo '</div>'; // Fin del div del empleado
                
                $count++;
                
                // Cada vez que se muestren dos empleados, se crea una nueva fila
                if ($count % 2 == 0) {
                    echo '</div><div class="empleado-row">';  // Inicia una nueva fila
                }
            }

            echo '</div>';  // Cierra la última fila
        } else {
            echo '<p>No se encontraron empleados.</p>';
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
