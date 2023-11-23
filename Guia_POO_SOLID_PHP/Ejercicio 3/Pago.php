<?php
    // Interfaz para la estrategia de pago
    interface PagoStrategy {
        public function realizarPago();
    }
    // Implementación de la estrategia para adultos
    class PagoAdulto implements PagoStrategy {
        public function realizarPago()
        {
            echo "Es mayor de edad y puede pagar";
        }
    }
    // Implementación de la estrategia para niños
    class PagoNiño implements PagoStrategy {
        public function realizarPago()
        {
            throw new Exception("El niño no puede pagar");
        }
    }
    // Clase base que utiliza la estrategia de pago
    class Persona {
        protected $pagoStrategy;
        public function __construct(PagoStrategy $pagoStrategy)
        {
            $this->pagoStrategy = $pagoStrategy;
        }
        public function pago()
        {
            $this->pagoStrategy->realizarPago();
        }
    }
    // Clase para adultos
    class Adulto extends Persona {
        public function __construct()
        {
            parent::__construct(new PagoAdulto());
        }
    }
    // Clase para niños
    class Niño extends Persona {
        public function __construct()
        {
            parent::__construct(new PagoNiño());
        }
    }
    // Uso de las clases
    $adulto = new Adulto();
    $adulto->pago();  // Imprime: "Es mayor de edad y puede pagar"

    $niño = new Niño();
    $niño->pago();    // Lanza una excepción: "El niño no puede pagar"
?>