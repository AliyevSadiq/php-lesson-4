<?php
/**
 * Created by PhpStorm.
 * User: SADIQ
 * Date: 18.04.2019
 * Time: 18:47
 */

//limit iterator massive limit qoymaq uchun istifade olunur
//ashagidaki numunede sehifelenmesine aiddir

$name_list=['NAME1','NAME2','NAME3','NAME4','NAME5','NAME6','NAME7'];
$page=(!empty($_GET['page']) && intval($_GET['page'])) ? intval($_GET['page']) : 1;
$perPage=3;
$offset=($page*$perPage)-$perPage;


$list=new ArrayIterator($name_list);
$count= $list->count()/$perPage;

if($count>intval($count)){
    $new_count=intval($count)+1;
}else{
    $new_count=intval($count);
}



$list=new LimitIterator($list,$offset,$perPage);


try{
    foreach ($list as $item){
        echo "{$item}<br>";
    }


    for ($i=1;$i<=$new_count;$i++){

      echo "<a href='?page=$i'>$i</a> ";

    }






}catch (OutOfBoundsException $e){
    echo "NO RECORD!";
}catch (Exception $e){
    echo "ERROR=".$e->getMessage();
}

