<?php
    $con = array("name"=>"PHP","time"=> 120 , "Zend");
    $con2= array("PHP",100);
    $diff= array_diff($con,$con2);

echo '<pre>';
print_r($con);
echo '</pre>';
echo '<pre>';
print_r($con2);
echo '</pre>';
echo '<pre>';
print_r($diff);
echo '</pre>';