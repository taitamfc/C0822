<?php
include_once 'db.php';//$conn

$controller = 'MatHang';
if( isset( $_GET['controller'] ) && $_GET['controller'] != '' ){
    $controller = $_GET['controller'];
}

switch ($controller) {
    case 'MatHang':
        include_once 'controllers/MatHangController.php';
        $objController =  new MatHangController();
        break;
    case 'LoaiHang':
        include_once 'controllers/LoaiHangController.php';
        $objController =  new LoaiHangController();
        break;
    default:
        # code...
        break;
}

// Gọi Controller


$page = 'list';
if( isset( $_GET['page'] ) && $_GET['page'] != '' ){
    $page = $_GET['page'];
}
// Gọi page
switch ($page) {
    case 'list':
        $objController->list();
        break;
    case 'add':
        $objController->add();
        break;
    case 'edit':
        $objController->edit();
        break;
    case 'delete':
        $objController->delete();
        break;
    default:
        $objController->list();
        break;
}


/*
    Hướng dẫn làm LoaiHang
    - Tạo controller LoaiHang và toàn bộ phương thức
    - Tạo model LoaiHang và toàn bộ phương thức
    - Tạo các file view cho list, add, edit 

    MatHang
        index.php?controller=MatHang&page=list   => Danh sach
        index.php?controller=MatHang&page=add    => Them moi
        index.php?controller=MatHang&page=edit   => Cap nhat
        index.php?controller=MatHang&page=delete => Xoa

    LoaiHang
        index.php?controller=LoaiHang&page=list   => Danh sach
        index.php?controller=LoaiHang&page=add    => Them moi
        index.php?controller=LoaiHang&page=edit   => Cap nhat
        index.php?controller=LoaiHang&page=delete => Xoa
*/ 