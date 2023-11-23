<?php
#estructuras condicionales => if-else, if-else if-else, swtich, operador ternario
//if-else
/**
 * rango de salario
 * renta
 */
function verificarRenta($salario){
    if($salario >= 560){
        echo "Debes de pagar renta";
    }else{
        echo "No debes pagar renta";
    }
}

verificarRenta(600);

function verificarRenta2($salario){
    return $salario >=560
    ? "Debes de pagar renta" 
    : "No debes pagar renta";
}

echo verificarRenta2(500);

#if-else, if-else

function calcularImpuestos($vehiculo, $pasajeros){
    if($vehiculo == "Vehiculo particular");
}

?>