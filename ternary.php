<?php

// $mark = 40;

// $result = ($mark == 33) ? "You are passed" : (($mark == 40) ? "You got 40" : (($mark == 50) ? "You got 50" : "You failed"));

// echo $result;
// echo "\n";

// $x = 5;
// echo $x;
// echo "<br />";
// echo $x++ + $x++;

$num = -30;
// Using if statement
if ( $num > 0 ) {
    $result = 'positive';
} elseif ( $num < 0 ) {
    $result = "negative";
    if ( $num < -10 ) {
        $result = "value is below -10";
    }
} elseif (  ( $num == 0 ) ) {
    $result = "its zero";
}
echo $result;
echo PHP_EOL;

$result = $num > 0 ? 'positive' : (  ( $num < 0 ? ( $num < -10 ? 'value is below -10' : 'negative' ) : 'its zero' ) );
echo "new $result";