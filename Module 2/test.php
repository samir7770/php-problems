<?php

$mark = 90;

if ( $mark >= 60 ) {
    echo "Result : First Division";
} elseif ( $mark >= 45 ) {
    echo "Result : Second Division";
} elseif ( $mark >= 33 ) {
    echo "Result : Third Division";
} elseif ( $mark < 33 ) {
    echo "Result : Failed";
}
