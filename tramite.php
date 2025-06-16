<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trámites - Sanatorio Vargas</title>
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

        .tramites {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .tramite {
            width: 40%;
            background-color: #fff;
            padding: 20px;
            border: 2px solid #008080;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .tramite p {
            font-size: 16px;
            margin: 10px 0;
        }

        select {
            width: 100%;
            padding: 8px;
            margin-top: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .botones {
            margin-top: 20px;
        }

        .botones a {
            display: inline-block;
            margin: 10px;
            padding: 10px 20px;
            font-size: 16px;
            border: 2px solid #333;
            border-radius: 5px;
            background-color: #fff;
            color: #333;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .botones a:hover {
            background-color: #333;
            color: #fff;
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- Título de la página -->
        <div class="titulo">
            ¿Qué trámite deseas realizar?
        </div>

        <!-- Sección de trámites -->
        <div class="tramites">
            <div class="tramite">
                <p>Actualizar mis datos</p>
                <select>
                    <option>Seleccionar...</option>
                </select>
            </div>

            <div class="tramite">
                <p>Agendar una cita con mi médico familiar</p>
                <select>
                    <option>Seleccionar...</option>
                </select>
            </div>

            <div class="tramite">
                <p>Realizar estudio clínico</p>
                <select>
                    <option>Seleccionar...</option>
                </select>
            </div>

            <div class="tramite">
                <p>Cambiar la fecha de mi cita</p>
                <select>
                    <option>Seleccionar...</option>
                </select>
            </div>
        </div>

        <!-- Botones de acción -->
        <div class="botones">
            <a href="inicio.php">Regresar</a>
            <a href="index.php">Salir</a>
        </div>
    </div>

</body>
</html>
