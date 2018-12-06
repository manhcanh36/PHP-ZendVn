<?php
    $con = array("name"=>"PHP","time"=> 80,100);
echo '<pre>';
print_r($con);
echo '</pre>';
    $result = serialize($con);
    echo $result;