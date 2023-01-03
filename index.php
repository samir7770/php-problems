<?php
// echo "Hello World";

// $number = 12345;
// $earth = "Dead";
// $age = 1234567890;

// define( 'PI', 3.1416 );

// printf("Currently Earth is %s, and he is %s years old", $earth, $age);

// echo "\n";
// echo PI;
// echo "\n";

// $x = 5;
// $y = 6;

// leap year

// $year = 1600;

// if ( $year % 4 == 0 && ( $year % 100 != 0 || $year % 400 == 0 ) ) {
//     echo "This is leap year";
// } else {
//     echo "Not a leap year";
// }

// echo "\n";

// $leapYear = ($year%4==0 && ($year % 100 != 0 || $year % 400 == 0)) ? "Leap Year" : "Not a leap year";
// echo $leapYear;

// printf("I am %");

// FIBONACCI PRINTING
$num = 10;
$first = 0;
$second = 1;
for ( $i = 0; $i <= $num; $i++ ) {
    echo $first . "\n";
    $third = $first + $second;
    $first = $second;
    $second = $third;
}