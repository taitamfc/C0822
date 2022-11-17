<?php
    $A = [8, 6, 34, 22, 40, 5, 11, 23, 44, 18];
    //    0  1   2   3   4  5   6   7  8   9
    $n = count($A);//10
    for( $i = 0; $i < $n; $i++  ){
        //        9     ;    1       --
        for( $k = $n - 1; $k > $i; $k-- ){
            // neu phan tu hien tai nho hon phan dung sau
            //     8   <     44
            if( $A[$k] < $A[$k-1] ){

                // hoan doi
                $temp = $A[$k-1];//44
                $A[$k-1] = $A[$k];//8
                $A[$k] = $temp;//44
            }
        }
    }

    echo '<pre>';
    print_r($A);
    die();