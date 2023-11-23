<?php
    class Calculadora {
        // Métodos
        public function sumar($num1, $num2) {
            return $num1 + $num2;
        }

        public function restar($num1, $num2) {
            return $num1 - $num2;
        }

        public function multiplicar($num1, $num2) {
            return $num1 * $num2;
        }

        public function dividir($num1, $num2) {
            // Validar división por cero
            if ($num2 != 0) {
                return $num1 / $num2;
            } else {
                return "Error: División por cero";
            }
        }

        public function potencia($base, $exponente) {
            return pow($base, $exponente);
        }

        public function factorial($num) {
            if ($num < 0) {
                return "Error: No se puede calcular el factorial de un número negativo";
            } elseif ($num == 0) {
                return 1;
            } else {
                return $num * $this->factorial($num - 1);
            }
        }
    }
?>