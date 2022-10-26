<?php
    $books = ['Van','Su','Dia'];
    //          0    1    2

    $books = [
        0 => 'Van',
        1 => 'Su',
        2 => 'Dia' 
    ];
    echo $books[0];
    $info = [
        'ten'       => 'Nguyen Van A',
        'ngaysinh'  => '18/10/2000',
        'diachi'    => 'Ha Noi'
    ];

    echo $info['ten'];
    echo '<pre>';
    print_r($books);
    echo '</pre>';

    foreach( $books as $key => $value ){
        //key: 0 1 2 
        //value: van su dia
        echo $value.'<br>';
    }

    foreach( $info as $key => $value ){
        //key: ten ngay sinh diachi
        //value: Nguyen van a, 18/10, Ha noi
    }

    foreach( $books as $key => $value ):
        echo $value.'<br>';
    endforeach;

    echo '<pre>';
    print_r($info);
    echo '</pre>';