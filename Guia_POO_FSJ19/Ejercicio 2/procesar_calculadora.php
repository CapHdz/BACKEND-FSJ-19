<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Procesar Calculadora</title>
</head>
<body>
    <?php
        include '../header_2.php';
        include 'Calculadora.php';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $operacion = $_POST["operacion"];
        
            // Crear instancia de la clase Calculadora
            $calculadora = new Calculadora();
        
            // Realizar la operación seleccionada
            switch ($operacion) {
                case "sumar":
                    $resultado = $calculadora->sumar($num1, $num2);
                    break;
                case "restar":
                    $resultado = $calculadora->restar($num1, $num2);
                    break;
                case "multiplicar":
                    $resultado = $calculadora->multiplicar($num1, $num2);
                    break;
                case "dividir":
                    $resultado = $calculadora->dividir($num1, $num2);
                    break;
                case "potencia":
                    $resultado = $calculadora->potencia($num1, $num2);
                    break;
                case "factorial":
                    $resultado = $calculadora->factorial($num1);
                    break;
                default:
                    $resultado = "Operación no válida";
                    break;
            }
        
            // Mostrar el resultado
            echo "
            <div class='container'>
                <h2 class='text-center p-2'>Resultado de la operación</h2>
                <ul class='list-group'>
                    <li class='list-group-item'><b>Operación:</b> $operacion</li>
                    <li class='list-group-item'><b>Número 1:</b> $num1</li>
                    <li class='list-group-item'><b>Número 2:</b> $num2</li>
                    <li class='list-group-item'><b>Resultado:</b> $resultado</li>
                </ul>
            </div>";
        }
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>