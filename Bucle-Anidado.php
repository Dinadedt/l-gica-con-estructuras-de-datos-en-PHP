<?php

// 1. Pirámide básica de asteriscos
function imprimirPiramide($altura) {
    echo "1. Pirámide básica:\n";
    for ($i = 1; $i <= $altura; $i++) {
        // Espacios en blanco
        for ($j = 1; $j <= $altura - $i; $j++) {
            echo " ";
        }
        // Asteriscos
        for ($k = 1; $k <= 2 * $i - 1; $k++) {
            echo "*";
        }
        echo "\n";
    }
    echo "\n";
}

// 2. Pirámide numérica
function imprimirPiramideNumerica($altura) {
    echo "2. Pirámide numérica:\n";
    for ($i = 1; $i <= $altura; $i++) {
        // Espacios en blanco
        for ($j = 1; $j <= $altura - $i; $j++) {
            echo " ";
        }
        // Números ascendentes
        for ($k = 1; $k <= $i; $k++) {
            echo $k;
        }
        // Números descendentes
        for ($l = $i - 1; $l >= 1; $l--) {
            echo $l;
        }
        echo "\n";
    }
    echo "\n";
}

// 3. Pirámide de letras
function imprimirPiramideLetras($altura) {
    echo "3. Pirámide de letras:\n";
    $letra = 'A';
    for ($i = 1; $i <= $altura; $i++) {
        // Espacios en blanco
        for ($j = 1; $j <= $altura - $i; $j++) {
            echo " ";
        }
        // Letras
        for ($k = 1; $k <= $i; $k++) {
            echo $letra++;
        }
        echo "\n";
    }
    echo "\n";
}

// 4. Pirámide hueca
function imprimirPiramideHueca($altura) {
    echo "4. Pirámide hueca:\n";
    for ($i = 1; $i <= $altura; $i++) {
        // Espacios en blanco
        for ($j = 1; $j <= $altura - $i; $j++) {
            echo " ";
        }
        // Asteriscos o espacios
        for ($k = 1; $k <= 2 * $i - 1; $k++) {
            if ($k == 1 || $k == 2 * $i - 1 || $i == $altura) {
                echo "*";
            } else {
                echo " ";
            }
        }
        echo "\n";
    }
    echo "\n";
}

// Ejecutar todos los patrones con altura 5
$altura = 5;
echo "Patrones con altura $altura:\n\n";

imprimirPiramide($altura);
imprimirPiramideNumerica($altura);
imprimirPiramideLetras($altura);
imprimirPiramideHueca($altura);

// Ejemplo de uso con diferentes alturas
echo "Ejemplo con diferentes alturas:\n\n";
imprimirPiramide(3);
imprimirPiramideNumerica(4);
imprimirPiramideLetras(6);
imprimirPiramideHueca(7);
?>