<!DOCTYPE html>
<html>
<head>
    <title>Registro de Paciente - Sanatorio Vargas</title>
</head>
<style>
        /* Contenedor principal */
    .container {
        width: 80%;
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        border: 2px solid #81C0E6;
        border-radius: 10px;
        background-color: #F5F5F5;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    }

    /* Título */
    h1 {
        text-align: center;
        color: #2092B8;
        margin-bottom: 20px;
    }

    /* Grid del formulario */
    form {
        display: grid;
        grid-template-columns: 1fr 1fr; /* Dos columnas iguales */
        column-gap: 30px; /* Más espacio entre las columnas */
        row-gap: 15px; /* Espacio entre filas */
    }
    /* Campos de texto y etiquetas */
    .form-group {
        display: flex;
        flex-direction: column;
    }

    /* Campos que abarcan ambas columnas */
    .full-width {
        grid-column: span 2; /* Abarca las dos columnas */
    }

    /* Inputs */
    input[type="text"],
    input[type="date"],
    textarea,
    select {
        width: 100%;
        padding: 10px;
        border: 1px solid #81C0E6;
        border-radius: 5px;
        font-size: 14px;
    }

    /* Radio buttons */
    .radio-group {
        display: flex;
        gap: 10px;
        align-items: center;
    }

    /* Botones */
    .button-group {
        display: flex;
        justify-content: space-between;
        gap: 10px;
    }

    button {
        padding: 10px 20px;
        background-color: #2092B8;
        color: #FFFFFF;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    button:hover {
        background-color: #157a94;
    }

    /* Estilo general */
    label {
        font-size: 14px;
        color: #333333;
        margin-bottom: 5px;
    }

    </style>
<body>
    <div class="container">
        <h1>Registro de Paciente</h1>
        <form method="post" action="process.php">
            <!-- NSS -->
            <div class="form-group">
                <label for="nss">NSS:</label>
                <input type="text" id="nss" name="nss" required>
            </div>

            <!-- Sexo -->
            <div class="form-group">
                <label for="sexo">Sexo:</label>
                <div class="radio-group" >
                    <input type="radio" id="masculino" name="sexo" value="masculino" required>
                    <label for="masculino">Masculino</label>
                    <input type="radio" id="femenino" name="sexo" value="femenino">
                    <label for="femenino">Femenino</label>
                </div>
            </div>

            <!-- Apellidos -->

            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            
            <div class="form-group">
                <label for="apellido_paterno">Apellido Paterno:</label>
                <input type="text" id="apellido_paterno" name="apellido_paterno" required>
            </div>

            <div class="form-group">
                <label for="apellido_materno">Apellido Materno:</label>
                <input type="text" id="apellido_materno" name="apellido_materno" required>
            </div>

            

            <!-- CURP -->
            <div class="form-group">
                <label for="curp">CURP:</label>
                <input type="text" id="curp" name="curp" required>
            </div>

            <!-- Fecha de nacimiento -->
            <div class="form-group">
                <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>
            </div>

            <!-- Alergias -->
            <div class="form-group full-width">
                <label for="alergias">Alergias:</label>
                <textarea id="alergias" name="alergias"></textarea>
            </div>

            <!-- Tipo de sangre -->
            <div class="form-group">
                <label for="tipo_sangre">Tipo de Sangre:</label>
                <select id="tipo_sangre" name="tipo_sangre">
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                </select>
            </div>

            <!-- Domicilio -->
            <div class="form-group full-width">
                <label for="domicilio">Domicilio:</label>
                <textarea id="domicilio" name="domicilio"></textarea>
            </div>

             <div class="form-group full-width">
                <label for="Recepcionista">Recepcionista:</label>
                <input type="number" id="Recepcionista" name="Recepcionista"></input>
            </div>

            <!-- Teléfono -->
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="tel" id="telefono" name="telefono" required>
            </div>

            <!-- Botones -->
            <div class="button-group full-width">
                <button type="submit">Registrarme</button>
                <button type="button" onclick="window.location.href='paciente.php';">Regresar</button>
            </div>
        </form>
    </div>
</body>
</html>
