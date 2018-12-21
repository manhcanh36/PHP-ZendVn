<?php
    $con = array("name"=>"PHP","time"=> 120,"HTMLT" , "Zend");
    $con2= array("PHP",100);
    $diff= array_intersect_assoc($con,$con2);

echo '<pre>';
print_r($con);
echo '</pre>';
echo '<pre>';
print_r($con2);
echo '</pre>';
echo '<pre>';
print_r($diff);
echo '</pre>';