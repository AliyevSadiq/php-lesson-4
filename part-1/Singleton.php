<?php

//SINGLETON design patterni obyekti 2-ci defe yaratmaga imkan vermir
class Singleton{

    private static $_instance;
    private function __clone(){}
    private function __construct(){}
    static function getInstance(){
        if(self::$_instance==null) {
            self::$_instance = new self();
            return self::$_instance;
        }else{
            exit('DUPLICATE CLASS SINGLETON');
        }
    }
    function currentTime(){
        return date('H:i:s');
    }

}

$s=Singleton::getInstance();
echo $s->currentTime();

$s1=Singleton::getInstance();
echo $s1->currentTime();