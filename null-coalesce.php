<?php

$x = 3;
$y=6;

$result = isset($x) ? $x : "X is not set";
echo $result;
echo PHP_EOL;

$res = $x ?? "X is not set";
echo $res;