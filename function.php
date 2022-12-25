<?php

function myFunc(int $min, $max)
{
    $total = 0;
    for ($i = $min; $i <= $max; $i++) {
        $total += $i;
    }
    return $total;
}

// echo myFunc(2, 5);

function check(int $a, int $b): int
{return $a + $b;
}
echo check(2, 3);
