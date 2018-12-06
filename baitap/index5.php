<?php
    $students = array();
    $students[0] = 'A';
    $students[1] = 'B';
    $students[2] = 'C';
    $students[3] = 'D';
    $students[4] = 'E';
    $students['abc'] = 'F';
    $students['def'] = 'G';
    //dùng vòng lặp foreach để in ra key và value của mảng
//sau đó dùng unset để hủy phẩn tử có keey là 2 và def
//sau đó in ra mảng mới bằng foreach

    foreach ($students as $key => $value){
        echo $key." : ". $value ."<br>";
    };
    echo '<br>';
    unset($students[2],$students['def']);
    foreach ($students as $key => $value){
        echo $key." : ". $value ."<br>";
    }
