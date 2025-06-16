<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Sanatorio Vargas</title>
    <style>
        /* Estilos CSS integrados */
        <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
            position: relative;
            min-height: 100vh;
        }

        /* Contenedor principal */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Estilos del encabezado */
        header {
            text-align: center;
            margin-bottom: 20px;
        }

        header h1 {
            color: #008080;
        }

        header .logo img {
            width: 150px;
        }

        /* Recuadro para el usuario */
        .user-info {
            position: absolute;
            top: 20px;
            left: 20px;
            background-color: #ffffff;
            color: #333;
            border: 2px solid #008080;
            border-radius: 10px;
            padding: 10px 20px;
            font-size: 16px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Menú principal con recuadros */
        .menu {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            margin: 20px 0;
        }

        .menu-item {
            text-align: center;
            background-color: #ffffff;
            border: 2px solid #008080;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 250px;
        }

        .menu-item img {
            width: 150px;
            height: 150px;
            margin-bottom: 10px;
        }

        .menu-item a button {
            background-color: #008080;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
        }

        .menu-item a button:hover {
            background-color: #005757;
        }

        /* Pie de página */
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

        /* Información de contacto */
        .contact-info {
            position: fixed;
            bottom: 10px;
            left: 10px;
            font-size: 14px;
            color: #333;
        }

        .contact-info a {
            color: #008080;
            text-decoration: none;
        }

        .contact-info a:hover {
            text-decoration: underline;
        }
    </style>
    </style>
</head>
<body>
<div class="user-info">
        <?php 
            session_start();  
            echo "Usuario: " . htmlspecialchars($_SESSION['nombre']);
        ?>
    </div>
    <div class="container">
        <header>
            <h1>Inicio</h1>
            <div class="logo">
                <img src="hos.jpg" alt="Logo Sanatorio Vargas">
            </div>
        </header>
        <main>
            <div class="menu">
                <div class="menu-item">
                    <img src="registro.jpg" alt="Registro de actividad">
                    <p><a href="diagnostico.php"><button>Diagnostico</button>
                </div>
                <div class="menu-item">
                    <img src="Pagos.jpg" alt="Formas de pago">
                    <p><a href="pago.php"><button>Formas de pago</button>
                </div>
                
                <div class="menu-item">
                    <img src="tramite.jpg" alt="Trámites">
                    <p><a href="tramite.php"><button>Trámites</button>
                </div>
            </div>
        </main>
        <footer>
        <a href="paciente.php" class="button regresar">Regresar</a>
        </footer>
    </div>

    <div class="contact-info">
        Contáctanos: 5568243029
        <p>CP: 94330 Oriente 6, sur 11 y 13 #1675</p>
            <a href="#">Ver ubicación</a>
    </div>
</body>
</html>
