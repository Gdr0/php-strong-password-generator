<?php

function randomPassword($pwslen) {
    $caratteri="1234567890QWERTYUIOPASDFGHJKLZXCVBNMqwertyuioplkjhgfdsaxzcvbnm!/£$%&/=?*+-_";
    $password="";
    for ($i=0 ; $i < $pwslen; $i++){
     
        $ind_random = rand(0, strlen($caratteri)-1);
        $car_random = $caratteri[$ind_random];
        $password .= $car_random;
        // echo $car_random;
    }
    return $password;
};