<?php

/**
 * Created by PhpStorm.
 * User: SADIQ
 * Date: 17.04.2019
 * Time: 19:53
 */


//ITERATOR INTERFACE-I FOREACH DAXILI FUNKSIONALLIGINI DEYISHDIRMEK UCHUNDUR

abstract class IteratorAbstract implements Iterator
{

    protected $start,$end,$cur;


           function __construct($start,$end)
           {
               $this->start=$start;
               $this->end=$end;

           }

           function rewind()
           {
               $this->cur=$this->start;
           }

            abstract   function current();

           function key()
           {
               return $this->cur;
           }

           function next()
           {
               $this->cur++;
           }


           function valid()
           {
               return $this->cur<=$this->end;
           }

 }


 class IteratorPow extends IteratorAbstract{

private $pow;

    function __construct($start, $end,$pow)
    {

       $this->pow=$pow;
        parent::__construct($start, $end);
    }


     function current(){
       return pow($this->cur,$this->pow);
     }
 }


 $test=new IteratorPow(2,4,5);
foreach ($test as $k=>$v){
    print "$k=$v<br>";
}



