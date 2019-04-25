<?php
/**
 * Created by PhpStorm.
 * User: SADIQ
 * Date: 23.04.2019
 * Time: 18:13
 */


//namespace eyni adli class-i,funksiyani,CONSTANTI ferqlendirmek uchun istifade olunur

require_once 'item1/index.php';
require_once 'item2/index.php';




$item1=new \ns\item1\Test();
echo '<br>'.\ns\item1\TESTING.'<br>';
$item2=new \ns\item2\Test();
echo '<br>'.\ns\item2\TESTING;


