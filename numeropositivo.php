<?php
$num = (int) readline("Digite um número inteiro positivo: ");
$sum = 0;

if ($num <= 0) {
    echo "O número inserido não é positivo.\n";
} else {
    for ($i = 1; $i <= $num; $i++) {
        $sum += $i;
    }
    echo "A soma dos números de 1 a $num é: $sum\n";
}
?>
