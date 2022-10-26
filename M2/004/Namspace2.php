<?php
include_once 'DongHa/Tam.php';
include_once 'GioLinh/Tam.php';

use DongHa\Tam;
use GioLinh\Tam as TamGioLinh;

$tam = new Tam();
$tam2 = new TamGioLinh();

echo '<pre>';
print_r($tam);
print_r($tam2);
die();
