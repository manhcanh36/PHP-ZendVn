<?php
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

   if(!empty($student)){
       foreach ($student as $key => $value){
           $name = $value["name"];
           $sex = ($value["sex"]==1) ? "Boy" : "Girl";
           $score = array_sum($value["score"]);
           echo "Name: " .$name. " - sex: ".$sex." - score: ".$score."<br>";
       }
   }