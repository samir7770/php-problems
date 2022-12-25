<?php

$a = 456;
$b = 4545;

if (($a <=> $b) == 0){
    echo "{$a} and {$b} are equal";
}elseif(($a <=> $b) == 1){
    echo "{$a} is greater than {$b}";
}elseif (($a <=> $b) == -1){
    echo "{$a} is smaller than {$b} ";
}