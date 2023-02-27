<?php
// ===============
// Write a PHP function to sort an array of strings by their length, in ascending order. (Hint: You can use the usort() function to define a custom sorting function.)
// ===============

// function sort_strings_by_length( $arr ) {
//     usort( $arr, function ( $a, $b ) {
//         return strlen( $a ) - strlen( $b );
//     } );
//     return $arr;
// }

// $arr = array( "one", "two", "three", "four" );
// $sorted_arr = sort_strings_by_length( $arr );
// print_r( $sorted_arr );

// // ===============
// // Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.
// // ===============

// function concatenate_reverse( $str1, $str2 ) {
//     $len1 = strlen( $str1 );
//     $len2 = strlen( $str2 );
//     $result = "";

//     for ( $i = $len1 - 1; $i >= 0; $i-- ) {
//         $result = $str1[$i] . $result;
//         if ( $i == 0 ) {
//             $result = $str2 . $result;
//         }
//     }

//     return $result;
// }
// $str1 = "Learn";
// $str2 = "PHP";
// $result = concatenate_reverse( $str1, $str2 );
// echo $result; // outputs "worldhello"

// // ===============
// // Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.
// // ===============

// function remove_first_last( $arr ) {
//     array_shift( $arr );
//     array_pop( $arr );
//     return $arr;
// }
// $myArray = array( "one", "two", "three", "four" );
// $newArray = remove_first_last( $myArray );
// print_r( $newArray );

// // ===============
// // Write a PHP function to check if a string contains only letters and whitespace.
// // ===============

// function contains_letters_whitespace( $str ) {
//     return preg_match( '/^[a-zA-Z\s]+$/', $str );
// }

// $str1 = "Learn";
// $str2 = "PHP 8";
// $isLettersAndWhitespace1 = contains_letters_whitespace( $str1 );
// $isLettersAndWhitespace2 = contains_letters_whitespace( $str2 );
// var_dump( $isLettersAndWhitespace1 );
// var_dump( $isLettersAndWhitespace2 );

// // ===============
// // Write a PHP function to find the second largest number in an array of numbers.
// // ===============

// function find_second_large( $arr ) {
//     $largest = $arr[0];
//     $second_largest = $arr[0];

//     foreach ( $arr as $num ) {
//         if ( $num > $largest ) {
//             $second_largest = $largest;
//             $largest = $num;
//         } elseif ( $num > $second_largest && $num != $largest ) {
//             $second_largest = $num;
//         }
//     }

//     return $second_largest;
// }

// $myArray = array( 1, 5, 9, 7, 6 );
// // $secondLargest = find_second_large( $myArray );
// array_push( $myArray, 'hello' );
// print_r( $myArray );

// $s = "abd ghj";
// // echo str_replace( 'abd', 'hi', $s );

// echo strpos( $s, "ghj" );

$arr = array( "hi", "ehllo", 'how' );
$impl = implode( ",", $arr );
// echo $impl;

$expld = explode( ',', $impl );
print_r( $expld );