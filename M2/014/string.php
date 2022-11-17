<?php
// Toi la "Sieu Nhan"
// Teacher's Day


$string = 'Toi la "Sieu Nhan"';
$string = "Teacher's Day";

$name = 'Nguyen Van A';
// Toi ten la $name

echo "Toi ten la $name";
echo 'Toi ten la '.$name;

$ip = '197.196.0.1';
// tach chuoi nay sang mang, phan tach boi dau .
$temp = explode('.',$ip);
echo '<pre>';
print_r($temp);
die();

