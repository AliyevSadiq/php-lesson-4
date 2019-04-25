<?php

/**
 * Created by PhpStorm.
 * User: SADIQ
 * Date: 18.04.2019
 * Time: 18:00
 */
class Recursiv extends RecursiveIteratorIterator
{

    public function beginChildren()
    {
       echo '<ul>';
    }

    public function endChildren()
    {
      echo '</ul></li>';
    }




}



$list=[
   'A',
   'B'=>[
       'B1',
       'B2',
   ],
    'C'=>[
        'C1'=>[
            'C11',
            'C12',
        ],
        'C2'=>[
            'C21',
            'C22'
        ]
    ]
];

$r=new Recursiv(new RecursiveArrayIterator($list),RecursiveIteratorIterator::SELF_FIRST);
echo '<ul>';
foreach ($r as $k=>$v){

    if($r->callHasChildren()){
       echo "<li>{$k}"; continue;
    }
    echo "<li>{$v}</li>";

}
echo '</ul>';



