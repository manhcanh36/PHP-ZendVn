<?php
    $array = array("a","b","c","d","e");

echo '<pre>';
print_r($array);
echo '</pre>';

    $new = array_slice($array,2,1,array(7,8,9));

echo '<pre>';
print_r($new);
echo '</pre>';

echo '<pre>';
print_r($array);
echo '</pre>';