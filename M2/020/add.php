<?php
    include_once 'db.php';//$conn
    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
        // echo '<pre>';
        // print_r( $_REQUEST );
        // echo '</pre>';
        $TENHANG = $_REQUEST['TENHANG'];
        $MACONGTY = $_REQUEST['MACONGTY'];
        $sql = "INSERT INTO `c10_mat_hang` 
        (`TENHANG`, `MACONGTY`) 
        VALUES 
        ('$TENHANG', $MACONGTY) ";
        // echo $sql;
        // die();
        $conn->exec($sql);
        // chuyen huong ve trang danh sach
        header("Location: list.php");
    }
?>
<form action="" method="post">
    TENHANG :<input type="text" name="TENHANG"> <br>
    MACONGTY: <input type="text" name="MACONGTY"> <br>
    <input type="submit" value="Them">
</form>