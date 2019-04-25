<?php
/**
 * Created by PhpStorm.
 * User: SADIQ
 * Date: 14.04.2019
 * Time: 18:01
 */


abstract class TestAbs{

    function xAbs(){}
}


interface TestInter{

    function xInter();
}

class Test1 extends TestAbs  implements TestInter {


    function xInter()
    {
       echo __METHOD__.'<br>';
    }

    function xAbs()
    {
        echo __METHOD__.'<br>';
    }

    /**
     * Test1 constructor.
     */
    function __construct()
    {
        //parent::xAbs();
    }

}

$t=new Test1();
$t->xAbs();
$t->xInter();


