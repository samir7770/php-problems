<?php

// function gcd( $a, $b ) {
//     $mini = min( $a, $b );
//     while ( $mini > 0 ) {
//         if ( $a % $mini == 0 && $b % $mini == 0 ) {
//             break;
//         }
//         $mini--;
//     }
//     return $mini;
//     // return min( $a, $b );

// }

// // echo gcd( 12, 18 );

// function lcm( $a, $b ) {
//     $mini = min( $a, $b );
//     while ( $mini > 0 ) {
//         if ( $a % $mini == 0 && $b % $mini == 0 ) {
//             break;
//         }
//         $mini--;
//     }
//     return $a * $b / $mini;

// }

// echo lcm( 20, 25 );

function longestWord( $str ) {
    $words = explode( " ", $str );
    $longest_word = "";
    foreach ( $words as $word ) {
        if ( strlen( $word ) > strlen( $longest_word ) ) {
            $longest_word = $word;
        }
    }
    return $longest_word;
}

$str = "The quick brown fox jumped over the lazy dog";
echo longestWord( $str );