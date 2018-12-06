<?php

   $student = array(
       "sv001" => array("name" =>"Manh",
                        "sex"=>1,
                        "score"=> array(4,5,6)
       ),
       "sv002" => array("name" =>"Manh",
           "sex"=>1,
           "score"=> array(4,5,6)
       ),
       "sv003" => array("name" =>"Manh",
           "sex"=>1,
           "score"=> array(4,5,6)
       ),
   );

   echo "<pre>";
   print_r($student);
   echo "<pre>";
   //teen cua sv002
   echo $student["sv002"]["name"]."<br>";
   //điểm môn thứ 2 của sv003
    echo $student["sv003"]["score"][1]."<br>";
    //thay đổi tên của sv003
    $student["sv003"]["name"] = "Face"."<br>";
    //thay đổi điểm sv003
    $student["sv003"]["score"] = 10 ."<br>";
    echo "<pre>";
    print_r($student);
    echo "<pre>";