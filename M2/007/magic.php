<?php

    class SupperMan{
        public function getName(){

        }
    }

    

    const M_1 = 'thang 1';
    const M_2 = 'thang 2';
    const M_3 = 'thang 3';
    const M_4 = 'thang 4';

    $month = 'thang 1';














    switch ($month) {
        case M_1:
        case M_3:
            echo 31;
            break;
        case M_4:
            echo 30;
            break;
        case M_2: 
            echo 28;
            break;    
        }





















    if( $month == M_1 || $month == M_2 || $month == M_3 ){
        echo 'Mua xuan';
    }



