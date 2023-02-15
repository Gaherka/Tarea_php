<?php
    class Calculadora {

    public function sumar($a, $b) {
        return $a + $b . "\n";
    }

    public function restar($a, $b) {
        return $a - $b . "\n";
    }

    public function multiplicar($a, $b) {
        return $a * $b . "\n";
    }

    public function dividir($a, $b) {
        if ($b == 0) {
            return "No se puede dividir por cero.";
        }
        return $a / $b . "\n";
    }

    }

    $calculadora = new Calculadora();
    echo $calculadora->sumar(5, 15); // Imprime el resultado
    echo $calculadora->restar(9, 2); // Imprime el resultado
    echo $calculadora->multiplicar(10, 5); // Imprime el resultado
    echo $calculadora->dividir(200, 20); // Imprime el resultado

?>

