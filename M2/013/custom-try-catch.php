<?php
class customException extends Exception {
    public function customGetMessage(){
        $error = '';
        $error .= '<br> Loi: '.$this->getMessage();
        $error .= '<br> Code: '.$this->getCode();
        $error .= '<br> Line: '.$this->getLine();
        $error .= '<br> File: '.$this->getFile();
        return $error;
    }
}

try {
    $a = 4;
    $b = 0;
    if( $b == 0 ){
        throw new customException("Chia cho 0");
    }
} catch (\Exception $e) {
    echo $e->customGetMessage();
}