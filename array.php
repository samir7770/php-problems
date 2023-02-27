<?php

// $arr = [1, 2, 3, 4, 6];
// $arr2 = array( "abir", "Bolit", "Cable", " Deepok", "Emon", "Faruk", "Gajhini" );

// $store = array_push( $arr, "kabila" );

// // var_dump( $arr );
// echo $store;
// echo " \n ============= \n";
// print_r( $arr );

// ==============
// Write a script which will display the following string
// ==============

// $color = array(  'white', 'green', 'red', 'blue', 'black' );
// echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the {$color[2]} carpet, the {$color[1]} lawn, the {$color[0]} house, the leaden sky. The new president and his first lady. - Richard M. Nixon";

// $n = count( $color );
// for ( $i = 0; $i < $n; $i++ ) {
//     echo "{$color[$i]}, \n";
// }

// foreach ( $arr as $num ) {
//     echo $num;
// }

// function gcd( $a, $b ) {

//     $a = abs( $a );
//     $b = abs( $b );

//     if ( $a == 0 || $b == 0 ) {
//         return max( $a, $b );
//     }

//     while ( $b != 0 ) {
//         $temp = $b;
//         $b = $a % $b;
//         $a = $temp;
//     }

//     return $a;
// }

// echo gcd( 13, 18 );

// $a = 12;
// $b = 17;
// while ( $b != 0 ) {
//     $temp = $b;
//     $b = $a % $b;
//     $a = $temp;
// }

// echo $a;

$foods = array( 2, 3, 4 );
$num = array(
    'One'   => "1",
    'Two'   => "2",
    'Three' => "3",
);
$num = [
    'One'   => "1",
    'Two'   => "2",
    'Three' => "3",
];
// print_r( $foods );
// echo PHP_EOL;
// echo $foods[1];
// echo PHP_EOL;
print_r( $num );
echo PHP_EOL;
echo $num[0];