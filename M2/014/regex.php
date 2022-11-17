<?php
/*
    \+[0-9]{2,2}\.[0-9]{3,3}\.[0-9]{3,3}\.[0-9]{3,3}
    preg_match
    $pattern    = '//';
*/

$string     = '+84.555.666.777';
$pattern    = '/\+[0-9]{2,2}\.[0-9]{3,3}\.[0-9]{3,3}\.[0-9]{3,3}/';
if( preg_match($pattern, $string) ){
    echo 'So dien thoai hop le';
}else{
    echo 'So dien thoai khong hop le';
}

/*
    preg_match_all
*/

$subject = "Chào mừng bạn đến với CodeGym. CodeGym - Hệ thống đào tạo lập trình hiện đại.";
$pattern = '/CodeGym/';
preg_match_all($pattern, $subject,$matches);

/*
    preg_split

*/
$ip = '197.196.0.1';
// tach chuoi nay sang mang, phan tach boi dau .
$temp = explode('.',$ip);
// echo '<pre>';
// print_r($temp);
// die();



$pattern = '/\./';
$iparr = preg_split ($pattern, $ip);
// echo '<pre>';
// print_r($iparr);
// // die();


$string = 'Toi567yeu344567em';
$pattern = '/[0-9]+/';
$stringarr = preg_split ($pattern, $string);
echo '<pre>';
print_r($stringarr);
// die();

