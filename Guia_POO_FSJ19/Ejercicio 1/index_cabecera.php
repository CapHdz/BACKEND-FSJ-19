<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Cabecera de Página</title>
</head>
<body>
    <?php 
        include '../header_2.php';
    ?>
    <div class="container">
    <h1 class="text-center pt-1">Configuración de Cabecera de Página</h1>

    <form class="form pt-3" action="procesar_cabecera.php" method="post">
        <label class="form-label" for="titulo">Título:</label>
        <input class="form-control" type="text" name="titulo" required><br>

        <label class="form-label" for="color">Color:</label>
        <select class="form-control" name="color">
            <option value="rojo">Rojo</option>
            <option value="azul">Azul</option>
            <option value="negro">Negro</option>
        </select><br>

        <label class="form-label" for="fuente">Fuente:</label>
        <input class="form-control" type="text" name="fuente" required><br>

        <label class="form-label" for="alineacion">Alineación:</label>
        <select class="form-control" name="alineacion">
            <option value="izquierda">Izquierda</option>
            <option value="centro">Centro</option>
            <option value="derecha">Derecha</option>
        </select><br>

        <input class="btn btn-outline-dark" type="submit" value="Enviar">
    </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>
