<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 11/18/2018
 * Time: 11:23 PM
 */
$number = 10;
if($number >= 0 && $number % 2 == 0){
    $result = "Nguyên dương chẵn";
}else if($number >= 0 && $number % 2 == 1){
    $result = "Nguyên dương lẻ";
}else if($number < 0 && $number % 2 == 0){
    $result = "Nguyên âm chẵn";
}else {
    $result = "Nguyên âm lẻ";
}
echo $result;