<?php
/**
 * Created by PhpStorm.
 * User: SADIQ
 * Date: 22.04.2019
 * Time: 18:20
 */

$resource=curl_init();

curl_setopt($resource,CURLOPT_URL,'http://php-lesson-4/part-3/demo/curl/test.php');

curl_exec($resource);

curl_close($resource);