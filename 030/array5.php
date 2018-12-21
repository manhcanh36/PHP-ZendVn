<?php
    $array = array("f"=> "PHP","l"=>80,"a"=>20);

echo '<pre>';
print_r($array);
echo '</pre>';

    ksort($array);
echo '<pre>';
print_r($array);
echo '</pre>';