<?php

 class CustomException extends Exception
 {
     public function errorMessage()
     {
         return 'Error on line ' . $this->getLine() . ' in ' . $this->getFile()
             . ': <b>' . $this->getMessage() . '</b> is not a valid E-Mail address';
     }
 }
 $email = "someone@example...com";
try {
    // kiem tra tinh hop le email, ko hop le thi nem
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new CustomException($email);//nem 1
    }
    //  kiem tra example co nam trong chuoi $email
    if (str_contains($email, "example")) {//nem 2
        throw new Exception("$email la mot email gia");
    }
}
catch (Exception $e) {//bat 1
    echo $e->getMessage();
}
catch (CustomException $e) {//bat 2
    echo $e->errorMessage();
}