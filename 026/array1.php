<?php
    $con = array("PHP","Zend Framework","Zend Framework","Zend Framework","Zend Framework");

   $con1 = array(2,2,3,4,5,6);
    $new = array_merge($con,$con1);
echo '<pre>';
print_r($new);
echo '</pre>';
