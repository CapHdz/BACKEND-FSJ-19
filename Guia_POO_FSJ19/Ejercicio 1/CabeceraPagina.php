<?php
    class CabeceraPagina {
        public $titulo;
        public $color;
        public $fuente;
        public $alineacion;

        public function __construct($titulo, $fuente) {
            $this->titulo = $titulo;
            $this->color = "negro"; // Color predeterminado
            $this->fuente = $fuente;
            $this->alineacion = "izquierda"; // Alineación predeterminada
        }

        // Métodos
        public function setAlineacion($alineacion) {
            $this->alineacion = $alineacion;
        }
        public function setColor($color) {
            $this->color = $color;
        }

        public function imprimirPropiedades() {
            echo "
            <h2 class='text-center p-2'>Configuración de Cabecera de Página</h2>
            <div class='container'>
                <ul class='list-group'>
                    <li class='list-group-item'><b>Título:</b> {$this->titulo}</li>
                    <li class='list-group-item'><b>Color:</b> {$this->color}</li>
                    <li class='list-group-item'><b>Fuente:</b> {$this->fuente}</li>
                    <li class='list-group-item'><b>Alineación:</b> {$this->alineacion}</li>
                </ul>
            </div>";
        }
    }
?>
