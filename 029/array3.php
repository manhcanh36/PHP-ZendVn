<?php
$con = array("name"=>"PHP","time"=> 120,"HTMLT" , "Zend");
    function myFunction(&$value,$key,$param = 2){
        $value = $value * $param;
    }
    array_walk($con,"myFunction",2);
echo '<pre>';
print_r($con);
echo '</pre>';