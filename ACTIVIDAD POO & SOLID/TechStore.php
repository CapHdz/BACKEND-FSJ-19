<?php

    class Producto {
        protected $nombre;
        protected $precio;
        protected $marca;

        public function __construct($nombre, $precio, $marca) {
            $this->nombre = $nombre;
            $this->precio = $precio;
            $this->marca = $marca;
        }

        public function calcularDescuento() {
            return 0; // Descuento base
        }

        public function imprimirDetalles() {
            echo "Nombre: {$this->nombre}<br>";
            echo "Precio: $ {$this->precio}<br>";
            echo "Marca: {$this->marca}<br>";
        }
    }

    class Camara extends Producto {
        protected $resolucion;
        protected $tipoLente;
        protected $cantidad;

        public function __construct($nombre, $precio, $marca, $resolucion, $tipoLente, $cantidad) {
            parent::__construct($nombre, $precio, $marca);
            $this->resolucion = $resolucion;
            $this->tipoLente = $tipoLente;
            $this->cantidad = $cantidad;
        }

        public function calcularDescuento() {
            // Descuento del 30% si compra 2 cámaras
            return ($this->cantidad === 2) ? ($this->precio * $this->cantidad) * 0.3 : 0;
        }

        public function imprimirDetalles() {
            parent::imprimirDetalles();
            echo "Resolución: {$this->resolucion}<br>";
            echo "Tipo de Lente: {$this->tipoLente}<br>";
            echo "Cantidad: {$this->cantidad}<br>";
        }
    }

    class Laptop extends Producto {
        protected $sistemaOperativo;
        protected $almacenamiento;
        protected $pago;

        public function __construct($nombre, $precio, $marca, $sistemaOperativo, $almacenamiento, $pago) {
            parent::__construct($nombre, $precio, $marca);
            $this->sistemaOperativo = $sistemaOperativo;
            $this->almacenamiento = $almacenamiento;
            $this->pago = $pago;
        }

        public function calcularDescuento() {
            // Descuento del 20% si compra la laptop al contado
            return ($this->pago == "contado") ? $this->precio * 0.2 : 0;
        }

        public function imprimirDetalles() {
            parent::imprimirDetalles();
            echo "Sistema Operativo: {$this->sistemaOperativo}<br>";
            echo "Almacenamiento: {$this->almacenamiento}<br>";
        }
    }

    class Celular extends Producto {
        protected $modelo;
        protected $color;
        protected $medidas;

        public function __construct($nombre, $precio, $marca, $modelo, $color, $medidas) {
            parent::__construct($nombre, $precio, $marca);
            $this->modelo = $modelo;
            $this->color = $color;
            $this->medidas = $medidas;
        }

        public function calcularDescuento() {
            // Descuento del 10% por la compra de un celular
            return $this->precio * 0.1;
        }

        public function imprimirDetalles() {
            parent::imprimirDetalles();
            echo "Modelo: {$this->modelo}<br>";
            echo "Color: {$this->color}<br>";
            echo "Medidas: {$this->medidas}<br>";
        }
    }

    // Ejemplo de uso:
    $camara = new Camara("Cámara DSLR", 500, "Canon", "20MP", "Lente 50mm", 2);
    $laptop = new Laptop("Laptop Gaming", 1200, "HP", "Windows 10", "1TB SSD", "contado");
    $celular = new Celular("Smartphone", 300, "Samsung", "Galaxy S20", "Negro", "150x75x7mm");
    
    // Imprimir detalles
    $camara->imprimirDetalles();
    echo "Descuento: $ {$camara->calcularDescuento()}<br><br>";
    
    $laptop->imprimirDetalles();
    echo "Descuento: $ {$laptop->calcularDescuento()}<br><br>";
    
    $celular->imprimirDetalles();
    echo "Descuento: $ {$celular->calcularDescuento()}<br><br>";
?>
