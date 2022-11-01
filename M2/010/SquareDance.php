<?php
    class Dancer {
        public $name = '';
        public $gender = false;

        public function __construct($name,$gender){
            $this->name     = $name;
            $this->gender   = $gender;
        }
    }

    $qNam = new SplQueue();
    $qNam->enqueue( new Dancer('Toan',true) );
    $qNam->enqueue( new Dancer('Truong',true) );
    $qNam->enqueue( new Dancer('Ngoc',true) );

    $qNu = new SplQueue();
    $qNu->enqueue( new Dancer('Thao Tam',false) );
    $qNu->enqueue( new Dancer('Huyen',false) );

    $qNam->rewind();
    $qNu->rewind();
    $pairs = [];
    $namWaiting = [];
    $nuWaiting = [];
    while( $qNam->valid() || $qNu->valid() ){
        if( $qNam->valid() && $qNu->valid() ){
            $pairs[] = [
                'nam'  => $qNam->current(),
                'nu'    => $qNu->current(),
            ]; 
            $qNam->next();
            $qNu->next();
        }elseif( $qNam->valid() ){
            $namWaiting[] = $qNam->current();
            $qNam->next();
        }elseif( $qNu->valid() ){
            $nuWaiting[] = $qNu->current();
            $qNu->next();
        }
    }

    echo '<pre>';
    echo '=========== PAIR==============';
    print_r($pairs);
    echo '=========== namWaiting ==============';
    print_r($namWaiting);
    echo '=========== nuWaiting ==============';
    print_r($nuWaiting);
    echo '</pre>';

