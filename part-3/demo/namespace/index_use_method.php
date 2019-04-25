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

use ns\item1\Test as Test1;
use ns\item1 as Test11;
use ns\item2\Test as Test2;
use ns\item2 as Test21;


$item1=new Test1();
echo '<br>'.Test11\TESTING.'<br>';
$item2=new Test2();
echo '<br>'.Test21\TESTING;


