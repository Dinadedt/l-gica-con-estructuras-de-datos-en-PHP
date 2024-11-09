<?php
function contarCaracteres($texto) {
    // Eliminar espacios y convertir a minúsculas
    $texto = strtolower($texto);
    
    // Convertir el texto a un array de caracteres
    $caracteres = str_split($texto);
    
    // Inicializar array asociativo para contar
    $frecuencia = [];
    
    // Contar la frecuencia de cada carácter
    foreach ($caracteres as $caracter) {
        // Ignorar espacios en blanco
        if ($caracter != ' ') {
            if (isset($frecuencia[$caracter])) {
                $frecuencia[$caracter]++;
            } else {
                $frecuencia[$caracter] = 1; // Cambiado a 1 para contar desde la primera aparición
            }
        }
    }
    
    // Ordenar por frecuencia de menor a mayor
    asort($frecuencia);
    
    return $frecuencia;
}

// Ejemplo de uso
$texto = "Dina Esperanza González Reyes es una estudiante a la que le cuesta mucho entender las clases";
$frecuencia = contarCaracteres($texto);

echo "Texto: $texto\n";
echo "Frecuencia de caracteres (orden ascendente):\n";

foreach ($frecuencia as $caracter => $cantidad) {
    echo "'$caracter': $cantidad veces\n";
}
?>
