<?php
$students = array('nguyen van a','nguyen van b', 'nguyen van c', 'nguyen van d');
//dùng vòng lặp do while để in ra key và value của mảng
    $key = 0;
    do{
        echo $key .'<br>';
        echo $students[$key] .'<br>';
        $key++;
    }while($key<count($students));

