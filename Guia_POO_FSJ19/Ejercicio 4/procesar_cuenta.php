<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Procesar Cuenta</title>
</head>
<body>
    <?php
        include '../header_2.php';
        include 'Cuenta.php';
    
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST["nombre"];
            $cantidadInicial = $_POST["cantidad"];
            $tipoCuenta = $_POST["tipoCuenta"];
            $numeroCuenta = $_POST["numeroCuenta"];
            $cantidadDeposito = $_POST["cantidadDeposito"];
            $cantidadRetiro = $_POST["cantidadRetiro"];
        
            // Crear instancia de la clase Cuenta
            $cuenta = new Cuenta($nombre, $cantidadInicial, $tipoCuenta, $numeroCuenta);
        
            // Realizar operaciones
            $cuenta->mostrarDatos();
            $cuenta->depositar($cantidadDeposito);
            $cuenta->retirar($cantidadRetiro);
        }
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>
