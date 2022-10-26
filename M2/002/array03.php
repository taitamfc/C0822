<?php
$tusach = [
    ['Toan','Ly','Hoa'],
    ['Van','Su','Dia']
];

    //lay do dai

    //truy xuat IPhonex
    echo $tusach[1][1];
    //thay doi IPhonex => IPhone ProMax
    $tusach[1][1] = 'Lich su';
    //xoa Hoa
    // unset( $tusach[0][2] );

    //in mang
    echo '<pre>';
    print_r( $tusach );
    echo '</pre>';

    //duyet mang
    foreach( $tusach as $books ){
        foreach( $books as $book ){
            echo '<br>'.$book;
        }
    }

    for( $i = 0; $i < count($tusach); $i++ ){
        for( $j = 0; $j < count( $tusach[$i] ); $j++ ){
            echo '<br>'.$tusach[$i][$j];
        }
    }



