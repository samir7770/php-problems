<?php

function myFunc( int $min, $max ) {
    $total = 0;
    for ( $i = $min; $i <= $max; $i++ ) {
        $total += $i;
    }
    return $total;
}

// echo myFunc(2, 5);

function check( int $a, int $b, ...$c ) {
    return $a + $b . $c[0] . $c[1] . $c[2] . $c[3] . $c[4];
}
echo check( 2, 3, 4, 5, 6, 7, 8 );