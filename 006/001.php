<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 11/18/2018
 * Time: 11:18 PM
 */$number = 20;
 if($number % 2 == 0){
     echo "Số dương";
 }
 $result = ($number % 2 == 0) ? "số chẵn" : "";
 echo $result;