<?php
$students = array('nguyen van a','nguyen van b', 'nguyen van c', 'nguyen van d');
//dùng vòng lặp while để in ra key và value của mảng
    $key = 0;
    while($key<count($students)){
        echo $key .'<br>';
        echo $students[$key] .'<br>';
        $key++;
    };

