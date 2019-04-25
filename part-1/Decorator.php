<?php
/**
 * Created by PhpStorm.
 * User: SADIQ
 * Date: 16.04.2019
 * Time: 18:18
 */
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

abstract class ShapeDecorator implements Shape{

    protected $decoratedShape;

    function __construct(Shape $decoratedShape)
    {
        $this->decoratedShape=$decoratedShape;

    }

    function draw()
    {
        $this->decoratedShape->draw();
    }

}

class RedShapeDecorator extends ShapeDecorator{

    function __construct(Shape $decoratedShape)
    {
        parent::__construct($decoratedShape);
    }

    private function setRedBorder(){
        echo 'BORDER COLOR RED';
    }
    function draw()
    {
        $this->decoratedShape->draw();
        $this->setRedBorder();
    }
}

$c=new Circle;
$c->draw();
$rc=new RedShapeDecorator(new Circle);
$rc->draw();





