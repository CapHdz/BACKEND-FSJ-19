<?php
    class Libro{
        #asignacion de atributos
        public $titulo;
        public $edicion;
        public $autor;
        protected $numero_pagina;
        public $descripcion;
        public $categoria;
        public $editorial;
        
        #constructor para inicializar nuestro objeto libro
        public function __construct($titulo, $edicion, $autor, $descripcion, $categoria){
            #accediendo al atributo y asignandole argumentos
            $this->titulo = $titulo;
            $this->edicion = $edicion;
            $this->autor = $autor;
            $this->descripcion = $descripcion;
            $this->categoria = $categoria;
        }

        #metodo para ingresar anuncion o mensajes en base a la categoria del libro
        public function verificarCategoria(){
            switch($this->categoria){
                case "aventuras":
                    echo "<div class='alert alert-primary' role='alert'>
                        Hey! este libro tiene el 30% de descuento
                    </div>";
                    break;
                case "terror":
                    echo "<div class='alert alert-secondary' role='alert'>
                        Si compras un segundo libro, te llevas un disfraz gratis
                    </div>";
                    break;
                case "ficcion":
                    echo "<div class='alert alert-warning' role='alert'>
                        Llevate la tarjeta para acumular puntos y seguir comprando tus libros favoritos
                    </div>";
                    break;
                case "programacion":
                    echo "<div class='alert alert-success' role='alert'>
                        Vas a ser un buen programador!
                    </div>";
                    break;
                default:
                    echo "Ingrese una categoria correcta";
            }
        }
    }
?>