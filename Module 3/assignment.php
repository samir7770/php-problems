<?php
// ================
// 1. Write a Reusable  PHP Function that can check Even & Odd Number And Return Decision
// ================

function isEven( $num ) {
    if ( $num % 2 == 0 ) {
        echo "{$num} is a even number";
    } else {
        echo "{$num} is a odd number";
    }
}
isEven( 77 );
echo PHP_EOL;

// ================
// 2. 1+2+3...…….100  Write a loop to calculate the summation of the series
// ================

$sum = 0;
for ( $x = 1; $x <= 100; $x++ ) {
    $sum += $x;
}

echo $sum;