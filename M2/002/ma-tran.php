<?php
    $matrix = [
        [1, 3, 5],
        [2, 4, 6],
        [7, 8, 9]
    ];

    // Tong doc
    /*
    matrix[0][1]
    matrix[1][1]
    matrix[2][1]
    */

    $tong_doc = 0;
    for ($i=0; $i < count($matrix) ; $i++) { 
        $tong_doc += $matrix[$i][1];// $tong_doc = $tong_doc + $matrix[$i][1];
    }


    // Tong ngang
    /*
    matrix[1][0]
    matrix[1][1]
    matrix[1][2]
    */

    $tong_ngang = 0;
    for ($i=0; $i < count($matrix) ; $i++) { 
        $tong_ngang += $matrix[1][$i];
    }