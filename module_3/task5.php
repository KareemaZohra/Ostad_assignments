<?php


function generatePassword($length){
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+1234567890';
    $alphabetLength = strlen($alphabet)-1;

    for ($i=0; $i<$length; $i++){
        $position = rand(0,$alphabetLength);
        $pass[$i] = $alphabet[$position];
    }
    echo implode($pass);
}

generatePassword(12);