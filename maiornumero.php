<?php
$numbers = [];

echo "Insira uma sequência de números inteiros (para encerrar, digite 'fim'):\n";

while (true) {
    $input = readline("Digite um número inteiro (ou 'fim' para encerrar): ");
    if ($input === 'fim') {
        break;
    }
    $numbers[] = (int) $input;
}

if (empty($numbers)) {
    echo "Nenhum número foi inserido.\n";
} else {
    $max = $numbers[0];
    foreach ($numbers as $number) {
        if ($number > $max) {
            $max = $number;
        }
    }
    echo "O maior número inserido é: $max\n";
}
?>
