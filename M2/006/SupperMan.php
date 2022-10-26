<?php
abstract class Human {
    abstract function say();
}
//interface
interface Bird {
    function fly();
}
interface Fish{
    function swiming();
}
//triển khai interaface
class SupperMan extends Human implements Bird,Fish{
   public function say(){

   } 
   public function fly(){

   }
   public function swiming(){

   }
}