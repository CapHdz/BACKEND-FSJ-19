<?php
    class Cancion {
        public $titulo;
        public $genero;
        private $autor;

        public function __construct($titulo, $genero) {
            $this->titulo = $titulo;
            $this->genero = $genero;
            $this->autor = ""; // Inicializar autor como una cadena vacía
        }

        // Métodos Get y Set para el atributo privado autor
        public function getAutor() {
            return $this->autor;
        }

        public function setAutor($autor) {
            $this->autor = $autor;
        }

        // Método para mostrar los datos de la canción
        public function mostrarDatos() {
            echo "
            <div class='container'>
                <h2 class='text-center p-2'>Información de la Canción</h2>
                <ul class='list-group'>
                    <li class='list-group-item'><b>Título:</b> {$this->titulo}</li>
                    <li class='list-group-item'><b>Género:</b> {$this->genero}</li>
                    <li class='list-group-item'><b>Autor:</b> {$this->autor}</li>
                </ul>
            </div>";
        }
    }
?>
