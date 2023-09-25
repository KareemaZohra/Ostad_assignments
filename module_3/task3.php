<?php

$grades = [85, 92, 78, 88, 95];

function customSort($arr){
   sort($arr);
   $a = array_reverse($arr);
    print_r($a);
}
customSort($grades);
