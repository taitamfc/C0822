<?php
    $find = 23;
    $numbers = [2, 5, 8, 12,16,23,38,56,72,91];
    //          0  1  2  3  4  5  6  7  8  9

    $L = 0;
    $R = count($numbers) - 1;
    while( $L <= $R ){
        $M = floor( ( $L + $R ) / 2 ) ;
        if( $numbers[$M] < $find ){
            $L = $M + 1;
        }elseif( $numbers[$M] > $find ){
            $R = $M - 1;
        }else{
            echo $M;
            break;
        }
    }
    die();

    $M = floor( ( $L + $R ) / 2 ) ;//4 => 16

    if( $numbers[$M] < $find ){
        $L = $M + 1;//5
    }
    echo '<br> L: '.$L;//5
    echo '<br> R: '.$R;//9
    echo '<br> M: '.$M;//4

    echo '<hr>';

    $M = floor( ( $L + $R ) / 2 ) ;//7
    if( $numbers[$M] > $find ){
        $R = $M - 1;
    }
    echo '<br> L: '.$L;//5
    echo '<br> R: '.$R;//6
    echo '<br> M: '.$M;//7

    echo '<hr>';
    $M = floor( ( $L + $R ) / 2 ) ;//5
    if( $numbers[$M] == $find ){
        echo $M;
    }

    