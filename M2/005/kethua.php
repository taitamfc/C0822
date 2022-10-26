<?php
    class Ong {
        protected $money = 100000000;
    }
    class Cha extends Ong{
        // thuoc tinh
        protected $skinColor = 'yellow';
        protected $carName = 'VF6';
        // phuong thuc
        public function xe_hoi(){
            echo '<br>'.$this->carName;
        }
        public function nha($name){
            echo '<br> Nha 3 tang';
        }
    }
    class Con extends Cha {
        // ghi đè phương thức của lớp cha
        public function xe_hoi(){
            echo $this->money;
            parent::nha();
            echo '<br>'.$this->carName.' - Độ lên VF9';
        }
        public function nha($name, $money = '',$color = ''){
            echo '<br> Nha 4 tang';
            if($money){
                echo '<br> '.$money;
            }
            if($color){
                echo '<br> '.$color;
            }
        }
    }

    // Khoi tao doi tuong
    $con_1 = new Con();
    $con_1->nha('ABC',100,'red');
    // truy cập thuộc tính
    echo '<br>';
    // echo $con_1->skinColor;

    echo '<pre>';
    print_r($con_1);
    die();

