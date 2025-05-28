<?php
// Definición de la función para realizar una calculadora simple
    function suma(){ 
        $valor1 = 16;
        $valor2 = 4;
        $resultado = $valor1 + $valor2;
        printf("El resultado de la suma es: %d", $resultado);
    }
    function resta(){ 
        $valor1 = 16;
        $valor2 = 4;
        $resultado = $valor1 - $valor2;
        printf("El resultado de la resta es: %d", $resultado);
    }
    function multiplicacion(){ 
        $valor1 = 16;
        $valor2 = 4;
        $resultado = $valor1 * $valor2;
        printf("El resultado de la multiplicación es: %d", $resultado);
    }
    function division(){ 
        $valor1 = 16;
        $valor2 = 4;
        if ($valor2 != 0) {
            $resultado = $valor1 / $valor2;
            printf("El resultado de la división es: %d", $resultado);
        } else {
            printf("Error: División por cero");
        }
    }
    // Llamada a las funciones
    suma();
    resta();
    multiplicacion();
    division();
?>