<?php

function fibonacci( $n ) {

    $first = 0;
    $second = 1;
    echo $first;
    echo $second;
    for ( $i = 0; $i < $n; $i++ ) {
        $third = $first + $second;
        echo $third;
        $first = $second;
        $second = $third;
    }

}

echo fibonacci( 5 );