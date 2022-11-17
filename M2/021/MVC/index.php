<?php
include_once 'db.php';//$conn

$page = 'list';
if( isset( $_GET['page'] ) && $_GET['page'] != '' ){
    $page = $_GET['page'];
}

// Gọi Controller
include_once 'controllers/MatHangController.php';

$objController =  new MatHangController();
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
