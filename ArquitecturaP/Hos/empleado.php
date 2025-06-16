<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Sanatorio Vargas</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<style>
    /* Estilos generales */
body {
    font-family: Arial, sans-serif;
    background-color: #FFFFFF;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

/* Contenedor principal */
.container-login {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    width: 80%;
    max-width: 1000px;
    border: 2px solid #81C0E6;
    border-radius: 15px;
    background-color: #F5F5F5;
    padding: 20px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
}

/* Sección del logo */
.logo-section {
    width: 40%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.logo-hospital {
    width: 100%;
    max-width: 250px;
    height: auto;
    border-radius: 10px;
}

/* Formulario de inicio de sesión */
.login-form {
    width: 55%;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}

.login-form h1 {
    color: #2092B8;
    font-size: 28px;
    margin-bottom: 20px;
}

.login-form form {
    width: 100%;
}

.login-form label {
    font-size: 16px;
    color: #333333;
    display: block;
    margin-bottom: 5px;
    text-align: left;
}

.login-form input {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #81C0E6;
    border-radius: 5px;
    font-size: 16px;
}

.links {
    display: flex;
    justify-content: space-between;
    margin-bottom: 15px;
}

.links a {
    text-decoration: none;
    color: #2092B8;
    font-size: 14px;
    transition: color 0.3s ease;
}

.links a:hover {
    color: #157a94;
}

/* Botón */
.button {
    width: 100%;
    padding: 10px 20px;
    background-color: #2092B8;
    color: #FFFFFF;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    margin-bottom: 10px;
}

.button:hover {
    background-color: #157a94;
}

/* Botón regresar */
.regresar {
    width: auto;
    text-align: center;
    margin-top: 10px;
    background-color: #FFFFFF;
    border: 1px solid #2092B8;
    color: #2092B8;
}

.regresar:hover {
    background-color: #F5F5F5;
}

    </style>
<body>
    <div class="container-login">
        <!-- Sección del logo -->
        <div class="logo-section">
            <img src="hos.jpg   " alt="Logo Hospital" class="logo-hospital">
        </div>

        <!-- Formulario de inicio de sesión -->
        <div class="login-form">
            <h1>Iniciar sesión</h1>
            <form action="login_processE.php" method="post">

                <label for="usuario">Nombre de registro:</label>
                <input type="text" id="usuario" name="usuario" placeholder="Ingrese su nombre" required>

                <label for="id">Contraseña:</label>
                <input type="password" id="id" name="id" placeholder="Ingrese su id" required>

                <div class="links">
                    <a href="index.php" class="regresar">Regresar</a>
                </div>

                <button type="submit" class="button">Iniciar sesión</button>
            </form>
        </div>
    </div>
</body>
</html>
