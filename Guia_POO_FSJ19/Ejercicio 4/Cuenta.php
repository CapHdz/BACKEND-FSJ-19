<?php
    class Cuenta {
        public $nombre;
        private $cantidad;
        protected $tipoCuenta;
        private $numeroCuenta;

        public function __construct($nombre, $cantidad, $tipoCuenta, $numeroCuenta) {
            $this->nombre = $nombre;
            $this->cantidad = $cantidad;
            $this->tipoCuenta = $tipoCuenta;
            $this->numeroCuenta = $numeroCuenta;
        }

        // Método para mostrar los datos
        public function mostrarDatos() {
            echo "
            <div class='container py-2'>
                <h2 class='text-center p-2'>Información de la Cuenta</h2>
                <ul class='list-group'>
                    <li class='list-group-item'><b>Nombre:</b> $this->nombre</li>
                    <li class='list-group-item'><b>Tipo de Cuenta:</b> $this->tipoCuenta</li>
                    <li class='list-group-item'><b>Número de Cuenta:</b> $this->numeroCuenta</li>
                </ul>
            </div>";
        }

        // Método para depositar
        public function depositar($cantidad) {
            if ($cantidad < 5.00) {
                echo "
                <div class='container py-2'><ul class='list-group'>
                        <li class='list-group-item list-group-item-warning'>El valor a depositar debe ser mayor a $5.00</li>
                    </ul></div>";
            } else {
                $this->cantidad += $cantidad;
                echo "
                <div class='container py-2'><ul class='list-group'>
                        <li class='list-group-item list-group-item-success'>Depósito realizado correctamente.<br> Cantidad depositada: $$cantidad</li>
                    </ul></div>";
            }
        }

        // Método para retirar
        public function retirar($valor) {
            if ($valor < 5.00) {
                echo "
                <div class='container py-2'><ul class='list-group'>
                        <li class='list-group-item list-group-item-warning'>El valor a retirar debe ser mayor a $5.00</li>
                        <li class='list-group-item'>Saldo actual en la cuenta: $$this->cantidad </li>
                    </ul></div>";
            } elseif ($valor > $this->cantidad) {
                echo "
                <div class='container py-2'><ul class='list-group'>
                        <li class='list-group-item list-group-item-danger'>No hay suficiente dinero en la cuenta</li>
                        <li class='list-group-item'>Saldo actual en la cuenta: $$this->cantidad </li>
                    </ul></div>";
            } else {
                $this->cantidad -= $valor;
                echo "
                <div class='container py-2'><ul class='list-group'>
                        <li class='list-group-item list-group-item-success'>Retiro realizado correctamente. Cantidad retirada: $valor </li>
                        <li class='list-group-item'>Saldo actual en la cuenta: $$this->cantidad </li>
                    </ul></div>";
            }
        }

    }
?>
