<?php
    class HCN {
        // Thuoc tinh
        public $dai = 0;
        public $rong = 0;

        // ham khoi tao
        public function __construct($ts_dai,$ts_rong){
            $this->dai = $ts_dai;
            $this->rong = $ts_rong;
        }

        // setter
        public function setDai($ts_dai){
            $this->dai = $ts_dai;
        }
        public function setRong($ts_rong){
            $this->rong = $ts_rong;
        }
        // getter
        public function getDai(){
            return $this->dai;
        }
        public function getRong(){
            return $this->rong;
        }
        //Phuong thuc
        public function tinhChuVi(){
            $ket_qua = ( $this->dai + $this->rong ) * 2;
            echo 'Chu vi la: '.$ket_qua;
        }
        public function tinhDienTich(){
            $ket_qua = $this->dai * $this->rong;
            echo 'Dien tich la: '.$ket_qua;
        }
    }

    $hcn_1 = new HCN(20,10);
    // thiet lap gia tri thuoc tinh
    // $hcn_1->dai = 20;
    $hcn_1->setDai(20);
    // $hcn_1->rong = 10;
    $hcn_1->setRong(10);
    
    // truy cap gia tri thuoc tinh
    // echo $hcn_1->dai;//20
    echo $hcn_1->getDai();
    echo '<br>';
    // echo $hcn_1->rong;//10
    echo $hcn_1->getRong();

    // goi phuong thuc
    $hcn_1->tinhChuVi();
    echo '<br>';
    $hcn_1->tinhDienTich();
    
    echo '<pre>';
    print_r($hcn_1);
    echo '</pre>';
