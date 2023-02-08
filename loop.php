<?php
// for ($i = 10; $i>=0; $i--){
//     echo $i.":". (100 - $i).PHP_EOL;
// }

// for ($i=0, $j=1; $i<=10; $i++, $j++){
//     echo $i + $j . PHP_EOL;
// }

// Factorial of 10

// echo PHP_EOL;
// for ( $i = 6, $fac = 1; $i > 0; $i-- ) {
//     $fac *= $i;
// }
// echo $fac;

// for ( $i = 0; $i < 10; $i++ ) {
//     $fibo = $i;
//     $new = $fibo + $i;
//     echo $new . PHP_EOL;
// }

// ===========================
// PROBLEMS
// ===========================

// Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no hyphen(-) at starting and ending position.

// for ( $i = 1; $i <= 10; $i++ ) {
//     echo $i;
//     if ( $i == 10 ) {
//         break;
//     }
//     echo " - ";
// }

// ===========================
// PROBLEMS
// ===========================

// Create a script using a for loop to add all the integers between 0 and 30 and display the total

// $total = 0;
// for ( $i = 1; $i <= 30; $i++ ) {
//     $total += $i;
// }

// echo $total;

for ( $i = 1; $i <= 10; $i++ ) {
    echo $i;
    if ( $i == 10 ) {
        break;
    }
    echo " - ";
}