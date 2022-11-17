<?php

class CustomException extends Exception
{
    public function errorMessage()
    {
        return $this->getMessage() . ' is not a valid E-Mail address.';
    }
}

$email = "someone@example.com";

try {
    try {
        if (str_contains($email, "example")) {//email chua example
            throw new Exception($email);//nem 1
        }
    } catch (Exception $e) {//catch 1
        throw new CustomException($email);//nem 2
    }
} catch (CustomException $e) {//catch 2
    echo $e->errorMessage();
}
?>