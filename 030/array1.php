<?php
    $array = array("a","b","c","d","e");

    $new = array_slice($array,2);   //c,d,
    $new = array_slice($array,2,2); //c,d
    $new = array_slice($array,2,0); //null

echo '<pre>';
print_r($new);
echo '</pre>';