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
        if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
            // echo '<pre>';
            // print_r($_REQUEST);
            // die();
            $objMatHang = new MatHang();
            $objMatHang->store( $_REQUEST );
            header("Location: index.php?page=list");
        }
        include_once 'views/mathang/add.php';
    }
    //trang chinh sua
    public function edit(){

    }
    //trang xoa
    public function delete(){

    }
}