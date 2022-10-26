<?php
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
    // Kiem tra nguoi dung da gui du lieu hay chua
    if( isset( $_POST['uploadclick'] ) ){
        echo '<pre>';
        print_r($_FILES);
        echo '</pre>';

        if( !empty($_FILES['avatar']['name']) ){
            // Nếu file upload không bị lỗi,
            // Tức là thuộc tính error > 0
            if ($_FILES['avatar']['error'] > 0)
            {
                echo 'File Upload Bị Lỗi';
            }
            else{
                // Upload file
                move_uploaded_file($_FILES['avatar']['tmp_name'], './folder/'.$_FILES['avatar']['name']);
                echo 'File Uploaded';
            }
        }
    }
    // Kiem tra nguoi dung da gui du lieu hay chua
    // if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    //     echo '<pre>';
    //     print_r($_FILES);
    //     echo '</pre>';

    //     if( !empty($_FILES['avatar']['name']) ){

    //     }
    // }
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <form method="post" action="" enctype="multipart/form-data">
            <input type="file" name="avatar"/>
            <input type="submit" name="uploadclick" value="Upload"/>
        </form>
    </body>
</html>