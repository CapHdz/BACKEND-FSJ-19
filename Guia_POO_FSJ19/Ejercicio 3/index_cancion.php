<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Información de Canción</title>
</head>
<body>
    <?php 
        include '../header_2.php';
    ?>
    <div class="container">
        <h1 class="text-center p-2">Información de Canción</h1>

        <form class="form" action="procesar_cancion.php" method="post">
            <label class="form-label" for="titulo">Título:</label>
            <input class="form-control" type="text" name="titulo" required><br>

            <label class="form-label" for="genero">Género:</label>
            <input class="form-control" type="text" name="genero" required><br>

            <label class="form-label" for="autor">Autor:</label>
            <input class="form-control" type="text" name="autor"><br>

            <input class="btn btn-outline-dark" type="submit" value="Guardar Información">
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>
