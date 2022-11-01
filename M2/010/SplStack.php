<?php
$q = new SplStack();
$q->push('Toan');
$q->push('Truong');
$q->push('Ngoc');

// Dua con tro ve lai vi tri bat dau
$q->rewind();
while( $q->valid() ){
    echo '<br>'.$q->current();//Ngoc
    $q->next();//di chuyen con tro toi 1 buoc
}

echo '<pre>';
print_r($q);
echo '</pre>';


