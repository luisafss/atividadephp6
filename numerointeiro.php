<?php
$num = (int) readline("Digite um número inteiro positivo: ");

if ($num <= 0) {
    echo "O número inserido não é positivo.\n";
} else {
    echo "Números pares entre 0 e $num:\n";
    for ($i = 0; $i <= $num; $i += 2) {
        echo $i . "\n";
    }
}
?>
