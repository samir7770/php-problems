<?php

$first = 0;
$second = 1;

for ($i = 0; $i<20; $i++){
    echo $first."\n";
    $third = $first+$second;
    $first = $second;
    $second = $third;
}