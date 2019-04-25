<?php
/**
 * Created by PhpStorm.
 * User: SADIQ
 * Date: 18.04.2019
 * Time: 18:23
 */

function factorial($number){

    if($number==0){
        return 1;
    }else{
        return ($number*factorial($number-2));
    }
}

echo factorial(4);






