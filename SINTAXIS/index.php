<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>Introduccion a PHP</h1>
    <?php
        //primer comentario
        #segundo comentario
        /**
         * tercer comentario
         * parrafo...
         */
        #asignacion de variables y constantes 
        $subtitulo = "asignacion de variables"; //string
        $numero = 23; //int
        $numero2 =34.5; // double o float 
        $boolean = true; //booleano
        $boolean2 = FALSE; //booleano
        //undefined vs null
        $undefined;
        $null = null;
        $array1 = ["cadema", 12, 54.67, false, null ];
        $array2 = array("computadora", "telefono", "tablet", 100);
        #imprimiendo variables
        /**
         * echo 
         * print_r
         * var_dump
         */
        echo $subtitulo;
        echo $numero;
        echo "hola";
        echo "<h2>Bienvenido FSJ19</h2>";
        echo "<br>";
        print_r($array2);
        echo "<br>";
        var_dump($array2);
        #constantes
        /**
         * define()
         * const
         */
        define("PI", 3.1416);
        const DUI = 12345678;
        echo "<br>";
        #concatenar (.)
        echo "El valor de PI es de: ".PI;
        echo "<br>";
        echo DUI;
        $saludo = "Gusto de conocerte";
        echo "Hola buenas noches $saludo";
        #Declarando un objeto
        /**
         * persona:{
         *      nombre:"Willian";
         *      apellido:"Hernández";
         * }
         */
        #clases
        class Persona{
            //public, private, protected
            public $nombre;
            public $apellido;
        }
        #llamando a la clase
        $persona = new Persona();
        $persona->nombre = "Willian";
        $persona->apellido = "Hernández";
        print_r($persona);
    ?>
</body>
</html>