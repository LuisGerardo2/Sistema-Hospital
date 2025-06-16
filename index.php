<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanatorio Vargas</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
    // Variable para la imagen del logo
    $logo = "Hos.jpg"; // Imagen en el mismo directorio
    ?>
    <div class="container">
        <div class="left">
            <img src="<?php echo $logo; ?>" alt="Sanatorio Vargas">
        </div>
        <div class="right">
            <h1>¡Bienvenido!</h1>
            <p>Por favor, indica la forma en que deseas iniciar</p>
            <div class="buttons">
                <a href="paciente.php" class="button">Paciente</a>
                <a href="empleado.php" class="button">Empleado</a>
            </div>
        </div>
    </div>
</body>
</html>
