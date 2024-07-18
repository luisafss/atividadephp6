<?php
$num = (int) readline("Digite um número inteiro positivo: ");

if ($num <= 0) {
    echo "O número inserido não é positivo.\n";
} else {
    echo "Divisores de $num:\n";
    for ($i = 1; $i <= $num; $i++) {
        if ($num % $i == 0) {
            echo "$i\n";
        }
    }
}
?>
