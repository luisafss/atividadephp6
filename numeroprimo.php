<?php
$num = (int) readline("Digite um número inteiro: ");

if ($num <= 1) {
    echo "O número $num não é primo.\n";
} else {
    $is_prime = true;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $is_prime = false;
            break;
        }
    }
    if ($is_prime) {
        echo "O número $num é primo.\n";
    } else {
        echo "O número $num não é primo.\n";
    }
}
?>
