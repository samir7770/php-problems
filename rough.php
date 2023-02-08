<?php

$n = 4;
if ( $n % 5 == 0 ) {
    echo "Correct with 2";
} elseif ( $n % 3 == 0 ) {
    echo "Correct with 3";
} elseif ( $n % 4 == 0 ) {
    echo "Correct with 4";
} else {
    echo "Incorrect";
}

echo PHP_EOL;

$result = ( $n % 5 == 0 ) ? "Correct with 2" : (  ( $n % 3 == 0 ) ? "Correct with 3" : (  ( $n % 4 == 0 ) ? "Correct with 4" : "Incorrect" ) );

echo $result;