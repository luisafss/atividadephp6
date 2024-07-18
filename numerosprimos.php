<?php
for ($num = 2; $num <= 100; $num++) {
    $is_prime = true;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $is_prime = false;
            break;
        }
    }
    if ($is_prime) {
        echo $num . "\n";
    }
}
?>
