<?php

// function myFunc( int $min, $max ) {
//     $total = 0;
//     for ( $i = $min; $i <= $max; $i++ ) {
//         $total += $i;
//     }
//     return $total;
// }

// // echo myFunc(2, 5);

// function check( int $a, int $b, ...$c ) {
//     return $a + $b . $c[0] . $c[1] . $c[2] . $c[3] . $c[4];
// }
// echo check( 2, 3, 4, 5, 6, 7, 8 );

// ===========================
// PROBLEMS
// ===========================

// Write a PHP function that takes a string as an argument and returns a new string with the following transformations applied:

// All letters should be converted to lowercase
// All vowels should be removed
// All remaining letters should be sorted in alphabetical order
// For example, if the input string is "Hello World", the output string should be "hllwrd".

// function transform( $str ) {
//     $strToLower = strtolower( $str );

//     if ( $strToLower ) {
//         return $strToLower;
//     }

// }

// echo transform( "Ashur" );

// ===========================
// PROBLEMS
// ===========================

// একটা function দেওয়া হবে called “isLGSeven()”. এটা ইনপুট হিসেবে একটা number নিবে।

// task: তোমাকে ইনপুট ভ্যালু এবং ৭ এর মধ্যে absolute পার্থক্য বের করতে হবে। যদি এই পার্থক্য ৭ এর চেয়ে ছোট হয়, তখন তোমাকে return করতে হবে সেই ইনপুট এবং ৭ এর মধ্যে পার্থক্য। নাহলে তোমাকে return করতে হবে double of their absolute difference.
// =================
// Sample Input & Output:-

// Input: 6  Output: -1
// Input: -15  Output: 44
// Input: 13 Output: 6

// function isLGSeven( $num ) {
//     $diff = abs( $num - 7 );
//     if ( $diff < 7 ) {
//         return $num - 7;
//     } else {
//         return $diff * 2;
//     }
// }

// echo isLGSeven( -15 );

// echo PHP_EOL;

$isLGSeven = fn( $n ) => ( abs( $n - 7 ) < 7 ) ? $n - 7 : abs( $n - 7 ) * 2;

echo $isLGSeven( 13 );
echo PHP_EOL;
$isSeven = fn( $v ) => 7 >= abs( $v ) ? $v - 7 : ( 7 >= abs( 7 - $v ) ? abs( $v - 7 ) : abs( 7 - $v ) * 2 );
echo $isSeven( 13 );