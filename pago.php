<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formas de Pago</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .payment-container {
            background: #fff;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 400px;
        }

        .payment-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .payment-option {
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid #e0e0e0;
            padding: 10px 0;
        }

        .payment-option:last-child {
            border-bottom: none;
        }

        .payment-option img {
            height: 30px;
            width: auto;
        }

        .payment-option label {
            flex: 1;
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <div class="payment-container">
        <h2>Selecciona tu forma de pago</h2>
        <form method="POST" action="process_payment.php">
            <div class="payment-option">
                <input type="radio" name="payment_method" value="paypal" id="paypal">
                <label for="paypal">Pago en línea: PayPal</label>
                <img src="pay.png" alt="PayPal">
            </div>
            <div class="payment-option">
                <input type="radio" name="payment_method" value="tarjetas" id="tarjetas">
                <label for="tarjetas">Pago con tarjetas (VISA, MasterCard)</label>
                <img src="vis.png" alt="Tarjetas">
            </div>
            <div class="payment-option">
                <input type="radio" name="payment_method" value="banco" id="banco">
                <label for="banco">Depósito bancario (Citibanamex)</label>
                <img src="citi.jpg" alt="Citibanamex">
            </div>
            <div class="payment-option">
                <input type="radio" name="payment_method" value="spei" id="spei">
                <label for="spei">Transferencia interbancaria (SPEI)</label>
                <img src="sp.png" alt="SPEI">
            </div>
            <div class="payment-option">
                <input type="radio" name="payment_method" value="corresponsales" id="corresponsales">
                <label for="corresponsales">Corresponsales (7-Eleven, Soriana, etc.)</label>
                <img src="co.jpg" alt="Corresponsales">
            </div>
           
            <button type="submit" style="margin-top: 20px; width: 100%; background: #007bff; color: #fff; border: none; padding: 10px; border-radius: 5px;">Continuar</button>
        </form>
        <a href="inicio.php"> <button type="submit" style="margin-top: 20px; width: 100%; background: #007bff; color: #fff; border: none; padding: 10px; border-radius: 5px;">Regresar</button>

    </div>
</body>
</html>
