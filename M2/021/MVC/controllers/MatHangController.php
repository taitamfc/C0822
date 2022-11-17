<?php
include_once 'models/MatHang.php';

class MatHangController {
    // trang danh sach
    public function list(){
        echo __METHOD__;
        $objMatHang = new MatHang();
        $rows = $objMatHang->all();
        include_once 'views/mathang/list.php';
    }
    //trang them moi
    public function add(){

    }
    //trang chinh sua
    public function edit(){

    }
    //trang xoa
    public function delete(){

    }
}