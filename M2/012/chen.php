<?php
$A = [8, 6, 34, 22, 40, 5, 11, 23, 44, 18];
//    0  1   2   3   4  5   6   7  8   9
$n = count($A);//10

for( $i = 1; $i < $n; $i++ ){
    $j = $i - 1;//0 => $A[$j] = 8
    $t = $A[$i];//6
    while( $t < $A[$j] && $j >= 0 ){
        $A[$j+1] = $A[$j];
        $j--;
    }
    $A[$j + 1] = $t;
}

echo '<pre>';
print_r($A);
die();