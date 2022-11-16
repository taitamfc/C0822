<?php
    include_once 'db.php';//$conn
    // edit.php?id=3
    $MAHANG = $_REQUEST['id'];//3
    // var_dump($MAHANG);die();
    $sql = "SELECT * FROM `c10_mat_hang` WHERE MAHANG = $MAHANG";
    // var_dump($sql);die();
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_OBJ);//array => object
    $row = $stmt->fetch();
    // debug
    // echo '<pre>';
    // print_r( $row );
    // echo '</pre>';

    // xu ly khi gui du lieu
    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
        // echo '<pre>';
        // print_r( $_REQUEST );
        // echo '</pre>';

        $TENHANG = $_REQUEST['TENHANG'];
        $MACONGTY = $_REQUEST['MACONGTY'];    
        $sql = " UPDATE `c10_mat_hang` SET 
            `TENHANG` = '$TENHANG',
            `MACONGTY` = '$MACONGTY'
        WHERE `c10_mat_hang`.`MAHANG` = $MAHANG";
        // var_dump($sql);die();
        $conn->exec($sql);
        //chuyen huong
        header("Location: list.php");
    }

?>
<form action="" method="post">
    TENHANG :<input type="text" name="TENHANG" value="<?= $row->TENHANG; ?>"> <br>
    MACONGTY: <input type="text" name="MACONGTY" value="<?= $row->MACONGTY; ?>"> <br>
    <input type="submit" value="Cap nhat">
</form>