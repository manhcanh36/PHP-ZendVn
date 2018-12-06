<?php
    $con = array("name"=>"PHP","time"=> 100 , "Zend","HTML");
    $con2= array("PHP",100);
    $diff= array_diff_assoc($con,$con2);

echo '<pre>';
print_r($con);
echo '</pre>';
echo '<pre>';
print_r($con2);
echo '</pre>';
echo '<pre>';
print_r($diff);
echo '</pre>';