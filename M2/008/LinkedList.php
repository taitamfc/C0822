<?php
    class Node {
        public $data = '';
        public $next = null;
        public function __construct($data){
            $this->data = $data;
        }
    }
    class LinkedList {
        private $_totalNodes;
        public $head = null;
        public function addFirst( $item ){
            $node = new Node($item);

            //thêm vào đầu
            if( $this->head == null ){
                $this->head = $node;
            }else{
                // $this->head->next = $node;
                $currentNode = $this->head;//Toan -> Truong -> Ngoc
                while($currentNode->next != null){
                    $currentNode = $currentNode->next;//Ngoc
                }
                $currentNode->next = $node;//Tam
            }

            $this->_totalNodes++;
        }
    }

    $objLinkedList = new LinkedList();
    $objLinkedList->addFirst('Toan');
    $objLinkedList->addFirst('Truong');
    $objLinkedList->addFirst('Ngoc');
    $objLinkedList->addFirst('Tam');

   echo '<pre>';
   print_r($objLinkedList);
   echo '</pre>';

