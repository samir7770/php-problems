<?php

$a = 4;

if ($a%2 == 0):
    echo "{$a} is a Even Number";
else:
    echo "{$a} is a Odd Number";
endif;
echo PHP_EOL;

switch($a):
    case ($a> 5):
        echo "{$a} is greater than 5";
        break;
    default:
        echo "{$a} is smaller than 5";
endswitch;