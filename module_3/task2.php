<?php

$numbers = [1,2,3,4,5,6,7,8,9,10];

function findEven($n){
    if(($n%2)==0){
        return $n;
    }
    else{
        return null;
    }
}

$result = array_filter($numbers,"findEven");

print_r($result);