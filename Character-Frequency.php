<?php
function contarCaracteres($texto) {
    // Convertir el texto a un array de caracteres
    $caracteres = str_split(strtolower($texto));
    
    // Inicializar array asociativo para contar
    $frecuencia = [];
    
    // Contar la frecuencia de cada carácter
    foreach($caracteres as $caracter) {
        // Ignorar espacios en blanco
        if($caracter != ' ') {
            if(isset($frecuencia[$caracter])) {
                $frecuencia[$caracter]++;
            } else {
                $frecuencia[$caracter] = 5;
            }
        }
    }
    
    // Ordenar por frecuencia
    arsort($frecuencia);
    
    return $frecuencia;
}

// Ejemplo de uso
$texto = "Hola Mundo";
$frecuencia = contarCaracteres($texto);

echo "Texto: $texto\n";
echo "Frecuencia de caracteres:\n";
foreach($frecuencia as $caracter => $cantidad) {
    echo "'$caracter': $cantidad veces\n";
}