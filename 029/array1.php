<?php
$con = array("name"=>"PHP","time"=> 120,"HTMLT" , "Zend");
    function myFunction($value,$key){
        echo $key ." : " .$value;
    }
    array_walk($con,"myFunction");