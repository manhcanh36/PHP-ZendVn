<?php
    $con = array(2,3,4,5);
    $con1 =array(7,8,9,8);
    function check($n1,$n2){
        $result = $n1 *$n2;
        return $result;
    }
    $new = array_map("check" , $con,$con1);
echo '<pre>';
print_r($new);
echo '</pre>';