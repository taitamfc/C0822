<?php
/*
    Empty: kiểm tra giá trị của biến
*/    
    echo '<hr>';
    var_dump( empty($name) );

    $name = null;
    echo '<hr>';
    var_dump( empty($name) );

    $name = 0;
    echo '<hr>';
    var_dump( empty($name) );

    $name = false;
    echo '<hr>';
    var_dump( empty($name) );
    
    $name = '123';
    echo '<hr>';
    var_dump( empty($name) );//false
