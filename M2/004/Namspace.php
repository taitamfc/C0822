<?php
include_once 'DongHa/Tam.php';
include_once 'GioLinh/Tam.php';

$tam_1 = new DongHa\Tam();
$tam_2 = new GioLinh\Tam();

echo '<pre>';
print_r($tam_1);
print_r($tam_2);
die();