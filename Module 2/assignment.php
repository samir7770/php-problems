<?php
// HF consultancy wants to build a very simple commission-calculating calculator for their Admission agents. Usually, the commission is twenty-five percent of the tuition fee if the tuition is above twenty thousand dollars. But if the tuition fee is above ten thousand dollars but less than twenty thousand dollars, the commission is twenty percent. If the tuition fee is less than ten thousand dollars but greater than seven thousand dollars,  the commission rate is fifteen percent. If the tuition fee is below seven thousand dollars the data will be invalid. As a developer please help HF Consultancy for building this simple calculator using a ternary operator in Php.

// $tuitionFee = 29000;

// if ( $tuitionFee >= 20000 ) {
//     $percentege = ( 25 / 100 ) * $tuitionFee;
//     echo $percentege;
// } elseif ( $tuitionFee >= 10000 ) {
//     $percentege = ( 20 / 100 ) * $tuitionFee;
//     echo $percentege;
// } elseif ( $tuitionFee >= 7000 ) {
//     $percentege = ( 15 / 100 ) * $tuitionFee;
//     echo $percentege;
// } else {
//     echo "Invalid Amount";
// }

echo PHP_EOL . "============" . PHP_EOL;

$tuitionFee = 29000;

$percentage = ( $tuitionFee >= 20000 ) ? ( 25 / 100 ) * $tuitionFee : (  ( $tuitionFee >= 10000 ) ? ( 20 / 100 ) * $tuitionFee : (  ( $tuitionFee >= 7000 ) ? ( 15 / 100 ) * $tuitionFee : "Invalid Amount" ) );

echo $percentage;