<?php
    $students = array('nguyen van a','nguyen van b', 'nguyen van c', 'nguyen van d');
    //dùng vòng lặp for để in ra key và value của mảng
   for ($row = 0;$row <count($students);$row++){
       echo "Key $row".'<br>';
           echo $students[$row].'<br>';
   }