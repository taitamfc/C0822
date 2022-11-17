<?php
$A = [8, 6, 34, 22, 40, 5, 11, 23, 44, 18];
//    0  1   2   3   4  5   6   7  8   9
$n = count($A);//10

// for( $i = 0; $i < $n; $i++ ){
//     $min = $i;
//     for( $k = $i + 1; $k < $n; $k++ ){
//         if( $A[$k] < $A[$min] ){
//             $min = $k;
//         }
//     }
//     //min=5;
//     // doi cho
//     $temp = $A[$min];//5
//     $A[$min] = $A[$i];
//     $A[$i] = $temp;
// }

sort($A);

echo '<pre>';
print_r($A);
die();