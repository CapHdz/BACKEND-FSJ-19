<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Procesar Canción</title>
</head>
<body>
    <?php
        include '../header_2.php';
        include 'Cancion.php';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $titulo = $_POST["titulo"];
            $genero = $_POST["genero"];
            $autor = $_POST["autor"];
        
            // Crear instancia
            $cancion = new Cancion($titulo, $genero);
        
            // Establecer el autor utilizando el método setAutor
            $cancion->setAutor($autor);
        
            // Mostrar los datos de la canción
            $cancion->mostrarDatos();
        }
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>
