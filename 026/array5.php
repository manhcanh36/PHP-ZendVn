<?php
    $con = array("pHp"=>"PHP","zend"=>"Zend Framework","zend"=>"Zend Framework");

    $new = array_change_key_case($con,CASE_LOWER);

echo '<pre>';
print_r($con);
echo '</pre>';

    echo '<pre>';
    print_r($new);
    echo '</pre>';
