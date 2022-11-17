<?php
$books = ['Van','Su','Dia'];
//          0    1     2
$temp = $books[1];//Su
$books[1] = $books[2];//Dia
$books[2] = $temp;//Su