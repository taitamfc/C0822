<?php
    // Container: Lớp chứa dữ liệu
    class ArrayList {
        //Elements: Các phần tử dữ liệ
        protected $elements = [];
        //Lấy về một phần tử
        public function get($index){
            return $this->elements[$index];
        }
        //Thêm một phần tử
        public function add($item){
            array_push( $this->elements, $item );
        }
        //Xoá một phần tử
        public function remove($index){
            array_splice($this->elements,$index,1);
        }
        //Lấy về số lượng phần tử
        public function size(){
            return count($this->elements);
        }
        //Tìm kiếm phần tử
        public function find($item){
           return array_search($item , $this->elements);
        }
        //Kiểm tra rỗng
        public function isEmpty(){
            if ( count( $this->elements) > 0){
                return false ;
            }else{
                return true ;
            }
        }
        //cap nhat phan tu trong mang
        public function update($index ,$item){
            $this->elements[$index] = $item;
        }
    }

    $objArrayList = new ArrayList();
    $objArrayList->add('Toan');
    $objArrayList->add('Truong');
    $objArrayList->add('Ngoc');
    $objArrayList->add('hoang');
    $objArrayList->add('dang');
    $objArrayList->add('toan');
    $objArrayList->remove(3);
    $objArrayList->update(3,'hoang' );
    echo $objArrayList->get(1);
    echo $objArrayList->size();
    //tim phan tu
    echo $objArrayList->find('Truong');


    

    echo '<pre>';
    print_r($objArrayList);
    echo '</pre>';