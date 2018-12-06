<?php
    $con = array("PHP","Zend Framework","Zend Framework","Zend Framework","Zend Framework");

echo '<pre>';
print_r($con);
echo '</pre>';
    echo "curent" .current($con) .'<br>';
    echo "next" .next($con) .'<br>';
    echo "curent" .current($con) .'<br>';
    echo "next" .next($con) .'<br>';
    echo "prev" .prev($con) .'<br>';
    echo "reset" .reset($con) .'<br>';
    echo "end" .end($con) .'<br>';