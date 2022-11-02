<?php
$string = '0943612567,0788829292,092827262';
$phones = explode(',',$string);
$vinas      = [];
$viettels   = [];
$mobis      = [];
foreach ($phones as $phone) {
    $checkPhome = substr($phone,0,3);
    //kiem tra vinas
    if( $checkPhome == '094' || $checkPhome == '091' ){
        $vinas[] = $phone;
    }
    //kiem tra vietel
    //kiem tra mobis
    if( $checkPhome == '092'){
        $mobis[] = $phone;
    }

}
echo '<pre>';
print_r($vinas);
print_r($viettels);
print_r($mobis);
die();