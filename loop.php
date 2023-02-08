<?php
// for ($i = 10; $i>=0; $i--){
//     echo $i.":". (100 - $i).PHP_EOL;
// }

// for ($i=0, $j=1; $i<=10; $i++, $j++){
//     echo $i + $j . PHP_EOL;
// }

// Factorial of 10

echo PHP_EOL;
for ( $i = 6, $fac = 1; $i > 0; $i-- ) {
    $fac *= $i;
}
// echo $fac;

for ( $i = 0; $i < 10; $i++ ) {
    $fibo = $i;
    $new = $fibo + $i;
    echo $new . PHP_EOL;
}
