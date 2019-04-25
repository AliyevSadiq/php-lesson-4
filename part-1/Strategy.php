<?php
/**
 * Created by PhpStorm.
 * User: SADIQ
 * Date: 16.04.2019
 * Time: 17:38
 */

//PATTERN STRATEGY ICHINDE EYNI ADLI LAKIN FERQLI
// FUNKSIYANALLIGI OLAN CLASSLARI CAGIRMAQ UCUNDUR

interface Strategy{
    function doOperation($num1,$num2);
}

class OperationAdd implements Strategy{
    function doOperation($num1, $num2)
    {
       return $num1+$num2;
    }
}
class OperationMult implements Strategy{
    function doOperation($num1, $num2)
    {
        return $num1*$num2;
    }
}



class Context{
    private $strategy;

    function __construct($s)
    {
        switch ($s){
            case '+':  $this->strategy=new OperationAdd; break;
            case '*':  $this->strategy=new OperationMult; break;
    }
    }

    function execute($n1,$n2){
        return $this->strategy->doOperation($n1,$n2);
    }

}
$ctx=new Context('*');
echo $ctx->execute(10,2);