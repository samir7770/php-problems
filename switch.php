<?php

// switch ($mark) {
//     case $mark >= 70:
//         echo "You got A";
//         break;
//     case $mark >= 60:
//         echo "You got B";
//         break;
//     case $mark >= 50:
//         echo "You got C";
//         break;
//     case $mark >= 40:
//         echo "You got D";
//         break;
//     case $mark >= 33:
//         echo "You passed";
//         break;

//     default:
//         echo "Failed";
//         break;
// }

$a = -21;
$r = $a % 2;

/*
switch(true){
case (0==$r && $a >= 0):
echo "{$a} is a positive even number";
break;

case (0==$r && $a < 0):
echo "{$a} is a negative even number";
break;

case (1==$r && $a >= 0):
echo "{$a} is a positive odd number";
break;

case (-1==$r && $a < 0):
echo "{$a} is a negative odd number";
break;

}

switch($a){
case ($a >= 0):
switch(true){
case(0==$r):
echo "{$a} is a positive even number";
break;
case(1==$r):
echo "{$a} is a positive odd number";
break;
}
break;
case ($a < 0):
switch(true){
case(0==$r):
echo "{$a} is a negative even number";
break;
case(-1==$r):
echo "{$a} is a negative odd number";
break;
}
break;
}
 */

// ALTERNATE SYNTEX
function constant()
{
define("GREETING", "Welcome to PHP", true);
echo greeting;
}
?>