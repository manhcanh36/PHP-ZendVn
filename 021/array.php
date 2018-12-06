<?php
    $con = array("PHP","Zend Framework");
    echo $con[1];
    echo "<br>";
    if(!empty($con)){
        for($i =0; $i< count($con);$i++){
            echo $con[$i] ."<br>";
        }
    }