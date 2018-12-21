<?php
    $con = array(2,3,4,5);
    function check($number){
        $result = ($number % 2 ==0) ? "even" : "odd";
        return $result;
    }
    $new = array_map("check" , $con);
echo '<pre>';
print_r($new);
echo '</pre>';