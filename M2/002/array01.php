<?php
    $books = ['Van','Su','Dia'];
    //          0     1    2
    $books = [
        0 => 'Van',
        1 => 'Su',
        2 => 'Dia'
    ];
    //lay do dai
    echo count($books);
    // truy xuat
    echo $books[0];
    //thay doi
    $books[0] = 'Van Hoc';
    //xoa
    // unset( $books[0] );
    //in 
    echo '<pre>';
    print_r( $books );
    echo '</pre>';
    //duyet mang
