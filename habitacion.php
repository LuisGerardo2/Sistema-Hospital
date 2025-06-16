<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habitaciones - Sanatorio Vargas</title>
    <style>
        /* Estilos generales */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
            text-align: center;
        }

        .container {
            margin: 20px auto;
            width: 90%;
            max-width: 1000px;
        }

        .titulo {
            font-size: 24px;
            font-weight: bold;
            color: #008080;
            margin-bottom: 20px;
        }

        .habitaciones {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .habitacion {
            width: 30%;
            background-color: #fff;
            padding: 20px;
            border: 2px solid #008080;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .habitacion p {
            font-size: 16px;
            margin: 10px 0;
        }

        .estado-ocupada {
            color: red;
        }

        .estado-desocupada {
            color: green;
        }

        select {
            width: 100%;
            padding: 8px;
            margin-top: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .regresar {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 16px;
            border: 2px solid #333;
            border-radius: 5px;
            background-color: #fff;
            color: #333;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .regresar:hover {
            background-color: #333;
            color: #fff;
        }

    </style>
</head>
<body>

    <div class="container">
        <!-- Título de la página -->
        <div class="titulo">
            Habitaciones - Sanatorio Vargas
        </div>

        <!-- Sección de las habitaciones -->
        <div class="habitaciones">
            <?php
            // Generando 10 habitaciones
            for ($i = 1; $i <= 10; $i++) {
                // Definir estado de la habitación
                $estado = ($i % 2 == 0) ? 'Ocupada' : 'Desocupada'; // Alternar entre ocupada y desocupada
                $fecha_ocupacion = ($estado == 'Ocupada') ? '04/04/2024' : ''; // Fecha solo si está ocupada
                $nombre_paciente = ($estado == 'Ocupada') ? 'Vargas Puertos Luis Gerardo' : ''; // Nombre solo si está ocupada

                echo '<div class="habitacion">';
                echo '<p><strong>No. habitación:</strong> ' . $i . '</p>';
                echo '<p><strong>No. piso:</strong> 8</p>';
                echo '<p><strong>Estado:</strong> <span class="' . ($estado == 'Ocupada' ? 'estado-ocupada' : 'estado-desocupada') . '">' . $estado . '</span></p>';
                echo '<p><strong>Fecha de ocupación:</strong> ' . $fecha_ocupacion . '</p>';
                echo '<p><strong>Nombre del paciente:</strong> ' . $nombre_paciente . '</p>';
                echo '<p><strong>Área:</strong> No disponible</p>'; // El área ha sido removida
                echo '<select>';
                echo '<option>Seleccionar...</option>';
                echo '</select>';
                echo '</div>';
            }
            ?>
        </div>

        <!-- Botón regresar -->
        <div>
            <a href="inicioE.php" class="regresar">Regresar</a>
        </div>
    </div>
</body>
</html>
