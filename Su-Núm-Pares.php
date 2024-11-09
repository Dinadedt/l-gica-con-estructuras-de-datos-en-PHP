<?php
function sumarPares($array) {
    $suma = 0;
    
    foreach($array as $numero) {
        // Verificar si el número es par usando el operador módulo
        if($numero % 2 == 0) {
            $suma += $numero;
        }
    }
    
    return $suma;
}

// Ejemplo de uso
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sumaPares = sumarPares($numeros);

echo "Array: " . implode(', ', $numeros) . "\n";
echo "La suma de los números pares es: " . $sumaPares . "\n";