<?php
    // Definición de la interfaz para la estrategia de bonificación
    interface BonificacionStrategy {
        public function calcularBono($sueldo);
    }
    // Implementación de la estrategia para el cargo de Cajero
    class CajeroBonificacion implements BonificacionStrategy {
        public function calcularBono($sueldo) {
            return $sueldo + 150;
        }
    }
    // Implementación de la estrategia para el cargo de Asesor Comercial
    class AsesorComercialBonificacion implements BonificacionStrategy {
        public function calcularBono($sueldo) {
            return $sueldo + 225;
        }
    }
    // Implementación de la estrategia para el cargo de Gerente
    class GerenteBonificacion implements BonificacionStrategy {
        public function calcularBono($sueldo) {
            return $sueldo + 300;
        }
    }
    // Clase GestionBonos que utiliza la estrategia
    class GestionBonos {
        public $nombre_empleado;
        public $cargo;
        public $sueldo;
        private $bonificacionStrategy;
        public function __construct($nombre, $sueldo, $cargo, BonificacionStrategy $bonificacionStrategy)
        {
            $this->nombre_empleado = $nombre;
            $this->sueldo = $sueldo;
            $this->cargo = $cargo;
            $this->bonificacionStrategy = $bonificacionStrategy;
        }
        public function agregarBono(){
            $total = $this->bonificacionStrategy->calcularBono($this->sueldo);
            echo "Usted, $this->nombre_empleado recibió un bono, su sueldo a pagar este mes es de $" . $total;
        }
    }
    // Uso de la clase GestionBonos con la estrategia adecuada
    $cajeroStrategy = new CajeroBonificacion();
    $bono = new GestionBonos("Juanita Rivera", 450, "Cajero", $cajeroStrategy);
    $bono->agregarBono();
?>
