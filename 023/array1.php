<?php
   $student = array();
   $student["sv001"] = array("name" => "Manh", "sex" => 1,"score" => array(4,5,6));
   $student["sv001"] = array("name" => "Manh", "sex" => 1,"score" => array(4,5,6));
   $student["sv001"] = array("name" => "Manh", "sex" => 1,"score" => array(4,5,6));

   $student = array(
       "sv001" => array("name" =>"Manh",
                        "sex"=>1,
                        "score"=> array(4,5,6)
       ),
       "sv001" => array("name" =>"Manh",
           "sex"=>1,
           "score"=> array(4,5,6)
       ),
       "sv001" => array("name" =>"Manh",
           "sex"=>1,
           "score"=> array(4,5,6)
       ),
   );

   echo "<pre>";
   print_r($student);
   echo "</pre>";