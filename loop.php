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

// Create a script to construct the following pattern, using nested for loop.

// *
// * *
// * * *
// * * * *
// * * * * *

// ==============

// *
// * *
// * * *
// * * * *
// * * * * *
// * * * * *
// * * * *
// * * *
// * *
// *

// for ( $i = 0; $i < 5; $i++ ) {
//     for ( $j = 0; $j <= $i; $j++ ) {
//         echo "* ";
//     }
//     echo PHP_EOL;

// }
// for ( $k = 4; $k >= 0; $k-- ) {
//     for ( $l = 0; $l <= $k; $l++ ) {
//         echo "* ";
//     }
//     echo PHP_EOL;

// }

// ===========================
// PROBLEMS
// ===========================

// Write a program to calculate and print the factorial of a number using a for loop. The factorial of a number is the product of all integers up to and including that number, so the factorial of 4 is 4*3*2*1= 24

// $factorial = 1;
// for ( $i = 1; $i <= 6; $i++ ) {
//     $factorial *= $i;
// }

// echo "Factorial of 6 is = $factorial";

// ===========================
// PROBLEMS
// ===========================

// Write a program which will give you all of the potential combinations of a two-digit decimal combination, printed in a comma delimited format

// for ( $i = 0; $i <= 9; $i++ ) {
//     for ( $j = 0; $j <= 9; $j++ ) {
//         echo "$i$j, ";
//     }
// }

// ===========================
// PROBLEMS
// ===========================

// Write a program which will count the "r" characters in the text

// for ( $i = 0; $i <= 6; $i++ ) {
//     $factorial *= $i;
// }

// $text = "w3resource";
// $len = strlen( $text ) - 1;
// // echo substr( $text, 1, 1 );
// $count = 0;

// for ( $i = 0; $i < strlen( $text ); $i++ ) {
//     if ( substr( $text, $i, 1 ) == "r" ) {
//         $count++;
//     }
// }

// echo $count;

// ===========================
// PROBLEMS
// ===========================

// Write a program which will print fibonacci series

// function fibo( $n ) {
//     $first = 0;
//     $second = 1;

//     for ( $i = 0; $i < $n; $i++ ) {
//         echo "$first \n";
//         $third = $first + $second;
//         $first = $second;
//         $second = $third;
//     }
// }

// fibo( 10 );

for ( $i = 1; $i <= 10; $i++ ) {
    if ( $i == 1 ) {
        echo $i;
    } else {
        echo '-' . $i;
    }
}
