<?php
    $con = array("php"=>"PHP","zend"=>"Zend Framework");
    echo "<prev>";
    print_r($con);
    echo "</prev>";
    echo $con[1];
    echo "<br>";
    if(!empty($con)){
        foreach ($con as $key => $value){
            echo $key." : ". $value ."<br>";
        }
    }