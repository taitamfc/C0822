<?php
    echo '<pre>';
    print_r( $_GET );
    echo '</pre>';

    var_dump( isset( $_GET['username'] ) );

    //kiem tra ton tai du lieu username hoac password
    if( isset( $_GET['username'] ) || isset( $_GET['password'] ) ){
        // echo '<pre>';
        // print_r($_GET);
        // echo '</pre>';
        
        $username = $_GET['username'];   
        $password = $_GET['password'];   

        // Xuat ra
        echo 'Ten dang nhap: '.$username;
        echo '<br>';
        echo 'Mat khau la: '.$password;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        Username: <input type="text" name="username"> <br>
        Password: <input type="password" name="password"> <br>
        <input type="submit" value="Login">
    </form>
</body>
</html>