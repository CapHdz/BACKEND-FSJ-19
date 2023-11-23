<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Procesar Cabecera</title>
</head>
<body>
    <?php
        include '../header_2.php';
        include 'CabeceraPagina.php';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $titulo = $_POST["titulo"];
            $color = $_POST["color"];
            $fuente = $_POST["fuente"];
            $alineacion = $_POST["alineacion"];
        
            // Crear instancia de la clase CabeceraPagina
            $cabecera = new CabeceraPagina($titulo, $fuente);
        
            // Establecer la alineación según la selección del usuario
            $cabecera->setAlineacion($alineacion);

            // Establecer el color según la selección del usuario
            $cabecera->setColor($color);
        
            // Imprimir propiedades
            $cabecera->imprimirPropiedades();
        }
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>
