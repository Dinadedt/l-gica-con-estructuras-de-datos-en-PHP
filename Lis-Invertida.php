<?php
function invertirLista($array) {
    $resultado = [];
    $longitud = count($array);
    
    for($i = $longitud - 1; $i >= 0; $i--) {
        $resultado[] = $array[$i];
    }
    
    return $resultado;
}

// Ejemplo de uso
$numeros = [1, 2, 3, 4, 5];
$invertida = invertirLista($numeros);

echo "Array original: " . implode(', ', $numeros) . "\n";
echo "Array invertido: " . implode(', ', $invertida) . "\n";