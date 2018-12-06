<?php
    $con = array("PHP","Zend Framework");
    echo $con[1];
    echo "<br>";
    if(!empty($con)){
        foreach ($con as $item => $value){
            echo $value ."<br>";
        }
    }