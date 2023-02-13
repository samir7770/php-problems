<?php

// function isTrue( $arr, $target ) {
//     for ( $i = 0; $i < count( $arr ); $i++ ) {
//         for ( $x = $i + 1; $x < count( $arr ); $x++ ) {
//             if ( $arr[$i] + $arr[$x] == $target ) {
//                 return "true";
//             }
//         }
//     }
//     return "false";
// }

// echo isTrue( [1, 2, 3, 4, 8, 7], 15 );

// 1. Write a Reusable  PHP Function that can check Even & Odd Number And Return Decision

// 2. 1+2+3...…….100  Write a loop to calculate the summation of the series

function isEven( $num ) {
    if ( $num % 2 == 0 ) {
        echo "{$num} is a even number";
    } else {
        echo "{$num} is a odd number";
    }
}

isEven( 78 );

// $sum = 0;
// for ( $x = 1; $x <= 100; $x++ ) {
//     $sum += $x;
// }

// echo $sum;