<?php
    class StopWatch {
        public static $startTime = 0;
        public static $endTime = 10;
        private $color = 'red';

        // Phuong thuc
        public function getStartTime(){
            // this ko di kem static
            // $this->color = 'yellow';
            echo __METHOD__;
        }
        public static function getEndTime(){
            // echo->endTime;
            echo self::$endTime;
        }
    }

    // truy xuat thuoc tinh static
    echo StopWatch::$startTime;
    echo '<br>';
    echo StopWatch::$endTime;
    echo '<br>';

    // truy cap phuong thuc static
    StopWatch::getStartTime();
    echo '<br>';
    StopWatch::getEndTime();


    
