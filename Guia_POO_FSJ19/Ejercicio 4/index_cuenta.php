<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Operaciones de Cuenta</title>
</head>
<body>
    <?php 
        include '../header_2.php';
    ?>
    <div class="container pb-5">
        <h1 class="text-center p-2">Operaciones de Cuenta</h1>
        <form class="form" action="procesar_cuenta.php" method="post">
            <label class="form-label" for="nombre">Nombre:</label>
            <input class="form-control" type="text" name="nombre" required><br>

            <label class="form-label" for="cantidad">Cantidad:</label>
            <input class="form-control" type="number" name="cantidad" required><br>

            <label class="form-label" for="tipoCuenta">Tipo de Cuenta:</label>
            <input class="form-control" type="text" name="tipoCuenta" required><br>

            <label class="form-label" for="numeroCuenta">Número de Cuenta:</label>
            <input class="form-control" type="text" name="numeroCuenta" required><br>

            <h2>Depósito</h2>
            <label class="form-label" for="cantidadDeposito">Cantidad a Depositar:</label>
            <input class="form-control" type="number" name="cantidadDeposito" required><br>

            <h2>Retiro</h2>
            <label class="form-label" for="cantidadRetiro">Cantidad a Retirar:</label>
            <input class="form-control" type="number" name="cantidadRetiro" required><br>

            <input class="btn btn-outline-dark" type="submit" value="Realizar Operaciones">
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>
