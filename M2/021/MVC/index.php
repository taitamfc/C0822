<?php
//include_once 'db.php';//$conn
// Gọi Controller
include_once 'controllers/MatHangController.php';

$objController =  new MatHangController();
$objController->list();