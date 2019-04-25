<?php

interface Shape{
    function draw();
}

class Square implements Shape{
    function draw()
    {
       echo 'SQUARE';
    }
}

class Rectangle implements Shape{
    function draw()
    {
        echo 'Rectangle';
    }
}

class Circle implements Shape{
    function draw()
    {
        echo 'Circle';
    }
}

abstract class abstractFactory{

   static function getShape($shape){}
    function getColor($color){}
}




class ShapeFactory extends abstractFactory{



 static  function getShape($type){
        $type=strtoupper($type);
        if(!$type){
            return null;
        }
        switch ($type){
            case 'SQUARE': return new Square(); break;
            case 'RECT': return new Rectangle(); break;
            case 'CIRCLE': return new Circle(); break;
            default:throw new Exception('Wrong type!');
        }
    }
}

$factory=new ShapeFactory();
$square=$factory->getShape('SQUARE');
$square->draw();
$circle=$factory->getShape('CIRCLE');
$circle->draw();
