<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Paciente</title>
    <link rel="stylesheet" href="stylesP.css">
</head>
<body>
    <div class="container-login">
        <div class="logo-section">
            <img src="Hos.jpg" alt="Sanatorio Vargas" class="logo-hospital">
        </div>
        <div class="login-form">
            <h1>Iniciar sesión</h1>

            <form action="login_process.php" method="POST">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu nombre" required>
                
                <label for="nss">NSS:</label>
                <input type="password" id="nss" name="nss" placeholder="Ingresa tu nss" required>
                
                <div class="links">
                    <a href="registrar_paciente.php">Registrarme</a>
                    
                </div>
                


                <button type="submit" class="button">Iniciar sesión</button>
            </form>
            <a href="index.php" class="button regresar">Regresar</a>
        </div>
    </div>
</body>
</html>
