<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 11/18/2018
 * Time: 11:28 PM
 */
$number = 11;
$n      = $number % 2 ;


$resultFirst    = ($number >= 0) ? "nguyên dương" : "nguyên âm";
$resultLast     = ($n == 0) ? "chẵn" : "lẻ";
$result = $resultFirst . " " . $resultLast;
echo $result;