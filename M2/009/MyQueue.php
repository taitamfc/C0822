<?php
    const QUEUE_IS_FULL = 'queue is full';
    const QUEUE_IS_EMPTY = 'queue is empty';
    class MyQueue {
        protected $elements = [];
        protected $limit;
        public function __construct($limit){
            $this->limit = $limit;
        }
        public function enqueue($item){
            if($this->isFull()){
                echo QUEUE_IS_FULL;
            }else{
                array_push($this->elements,$item);
            }
        }
        public function dequeue(){
            if($this->isEmpty()){
                echo QUEUE_IS_EMPTY;
            }else{
               return array_shift($this->elements);
            }
        }
        public function peek(){
            if($this->isEmpty()){
                echo QUEUE_IS_EMPTY;
            }else{
                return reset($this->elements);
            }
        }
        public function isEmpty(){
            return empty ($this->elements);
        }
        public function isFull(){
            if(count($this->elements) == $this->limit){
                return true;
            }else{
                return false;
            }
        }

    }
    $objMyQueue = new MyQueue(5);
    $objMyQueue->enqueue('toan1');
    $objMyQueue->enqueue('toan2');
    $objMyQueue->enqueue('toan3');
    $objMyQueue->enqueue('toan4');
    $objMyQueue->enqueue('toan5');
    $objMyQueue->enqueue('toan6');
    $objMyQueue->enqueue('toan7');
    echo '<br>'.$objMyQueue->dequeue();
   var_dump($objMyQueue->isEmpty());
   echo '<br>'.$objMyQueue->peek();
    
    echo '<pre>';
    print_r($objMyQueue);
    echo '</pre>';
    