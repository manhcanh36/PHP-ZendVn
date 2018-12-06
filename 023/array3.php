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
           $sex = $value["sex"];
           $score = $value["score"];
           $total = 0;
           for($i=0;$i< count($score);$i++){
                $total +=$score[$i];
           }
           echo "Name: " .$name. " - sex: ".$sex." - score: ".$total."<br>";
       }
   }