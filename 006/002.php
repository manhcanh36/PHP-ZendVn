<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 11/18/2018
 * Time: 11:20 PM
 */
$number = -21;
if($number % 2 == 0) {
    $result = "số chẵn";
}else{
    $result = "số lẻ";
}
//$result = ($number % 2 == 0) ? "số chẵn" : "";
echo $result;