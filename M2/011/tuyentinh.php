<?php

$numbers = [1,4,6,3,2,7];
//          0 1 2 3 4 5
$find = 2;
foreach ($numbers as $key => $value) {
    if($value == $find){
        echo $key;
    }
}