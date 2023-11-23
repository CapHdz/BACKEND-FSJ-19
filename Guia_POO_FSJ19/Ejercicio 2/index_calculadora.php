<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Calculadora</title>
</head>
<body>
    <?php 
        include '../header_2.php';
    ?>
    <div class="container">
        <h1 class="text-center pt-1">Calculadora</h1>

        <form class="form" action="procesar_calculadora.php" method="post">
            <label class="form-label" for="num1">Número 1:</label>
            <input class="form-control" type="number" name="num1" required><br>

            <label class="form-label" for="num2">Número 2:</label>
            <input class="form-control" type="number" name="num2" required><br>

            <label class="form-label" for="operacion">Operación:</label>
            <select class="form-control" name="operacion">
                <option value="sumar">Sumar</option>
                <option value="restar">Restar</option>
                <option value="multiplicar">Multiplicar</option>
                <option value="dividir">Dividir</option>
                <option value="potencia">Potencia</option>
                <option value="factorial">Factorial</option>
            </select><br>

            <input class="btn btn-outline-dark" type="submit" value="Calcular">
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>
