
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diagnóstico</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #000;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .header img {
            height: 50px;
        }
        .header .date {
            font-size: 14px;
            color: #555;
        }
        .section {
            margin-bottom: 20px;
        }
        .section h2 {
            font-size: 18px;
            margin-bottom: 10px;
            color: #333;
        }
        .section p {
            margin: 5px 0;
        }
        .treatment p {
            font-weight: bold;
        }
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
</head>
<body>
    <div class="header">
        <div>
            <img src="sana.jpg" alt="Sanatorio Vargas">
        </div>
        <div class="date">15-Noviembre 2024</div>
    </div>

    <div class="section">
        <h2>DIAGNÓSTICO</h2>
        <p>Diabetes Mellitus Tipo 2</p>
        <p>Ansiedad</p>
        <p>Depresión</p>
        <p>Taquicardia</p>
        <p>Insuficiencia renal</p>
        <hr>
    </div>

    <div class="section treatment">
        <h2>TRATAMIENTO</h2>
        <p>Metformina 500mg</p>
        <p>1 tableta. Vía oral. Desayuno, comida y cena, no suspender</p>
        <p>Captopril 50mg</p>
        <p>1 tableta. Vía oral, cada 6 horas no suspender</p>
        <p>Ventolin salbutamol</p>
        <p>En caso de no poder respirar</p>
    </div>
    <a href="inicio.php" class="regresar">Regresar</a>
</body>
</html>
