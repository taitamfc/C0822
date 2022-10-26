<?php
/*
    isset: kiem tra su ton tai cua bien hoặc chỉ số trong mảng
    input:  1 biến, mảng, chỉ số mảng 
    output: boolean
*/

var_dump( isset($name)  );

$info = [
    'name' => 'Nguyen Van A'
];

var_dump( isset( $info['name'] ) );//true

var_dump( isset( $info['price'] ) );//false
echo '<hr>';
$money = false;
var_dump( isset($money) );

