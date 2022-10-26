<?php
    class StopWatch {
        private $startTime = 0;
        private $endTime = 10; 
        // getter
        public function getStartTime(){
            return $this->startTime;
        }
        public function getEndTime(){
            return $this->endTime;
        }
    }
    
    // khởi tạo đối tượng
    $objStopWatch = new StopWatch();
    // truy cap gia tri thuoc tinh
    // echo $objStopWatch->startTime;
    // echo '<br>';
    // echo $objStopWatch->endTime;

    //truy cap phuong thuc
    echo $objStopWatch->getStartTime();
    echo '<br>';
    echo $objStopWatch->getEndTime();
    