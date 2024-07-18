<?php
for ($i = 5; $i <= 10; $i++) {
    echo "Tabuada do $i:\n";
    for ($j = 1; $j <= 10; $j++) {
        $resultado = $i * $j;
        echo "$i x $j = $resultado\n";
    }
    echo "\n";
}
?>
