<?php

$global = 12;

function myFunc (){
    global $global;
    echo "\nPrinting global var inside function {$global}\n";

    $local = 13;
    echo $local;
}
myFunc();
echo "\nPrinting global var outside function {$global}";
// echo "\n Printing local var in outside function {$local}";