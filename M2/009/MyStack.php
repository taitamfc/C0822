<?php
    const STACK_IS_FULL = 'stack is full';
    const STACK_IS_EMPTY = 'stack is empty';
    class MyStack{
        private $elements = [];
        private $limit;
        public function __construct($limit){
            $this->limit = $limit;
        }
        public function push($item){
            if($this->isFull()){
                echo STACK_IS_FULL;
            }else{
                array_unshift($this->elements,$item);
            }
        }
        public function pop(){
            if($this->isEmpty()){
                echo STACK_IS_EMPTY;
            }else {
               return array_shift($this->elements);
            }
        }
        public function peek(){
            if($this->isEmpty()){
                echo STACK_IS_EMPTY;
            }else{
                return reset($this->elements);
            }
        }
        public function isEmpty(){
            return empty ($this->elements);
        }
        public function isFull(){
            if($this->elements == $this->limit){
                return true;
            }else{
                return false;
            }
        }
    }

    $objMyStack = new MyStack(5);
    // Code here
    $objMyStack->push('toan');
    $objMyStack->push('toan1');
    $objMyStack->push('toan2');
    $objMyStack->push('toan3');
    $objMyStack->push('toan4');
    $objMyStack->push('toan5');
   echo '<br>'.$objMyStack->pop();
   echo '<br>'. $objMyStack->pop();
   echo '<br>'.$objMyStack->peek();
   echo "<br>";
   var_dump($objMyStack->isEmpty());
   var_dump($objMyStack->isFull());








    echo '<pre>';
    print_r( $objMyStack);
    die();