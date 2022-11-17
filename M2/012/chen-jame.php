<?php
function insertionSort($myArray): array
{
    for ($i = 0; $i < count($myArray); $i++) {
        $val = $myArray[$i];
        $j = $i - 1;
        while ($j >= 0 && $myArray[$j] > $val) {
            $myArray[$j + 1] = $myArray[$j];
            $j--;
        }
        $myArray[$j + 1] = $val;
    }
    return $myArray;
}

$A = [8, 6, 34, 22, 40, 5, 11, 23, 44, 18];
$A1 = insertionSort($A);
echo '<pre>';
print_r($A1);
die();