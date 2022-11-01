<?php
    $q = new SplQueue();
    $q->enqueue('Toan');
    $q->enqueue('Truong');
    $q->enqueue('Ngoc');

    // Dua con tro ve lai vi tri bat dau
    $q->rewind();

    while( $q->valid() ){
        echo '<br>'.$q->current();//Toan
        $q->next();//di chuyen con tro toi 1 buoc
    }
    
    echo '<pre>';
    print_r($q);
    echo '</pre>';