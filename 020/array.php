<?php
    $php = "PHP";
    $zend = "Zend Framework";
    $con = array();
    $con[] = "PHP";
    $con[] = "Zend Framework";
    $legth = count($con);
    echo $legth;
    echo "<br>";
  //  if($legth >0){
    //    echo "Không là mảng rỗng";
    //}else{
     //   echo "Mảng rỗng";
    //}
    //Cách 2
    if(!empty($con)){
        echo "Không là mảng rỗng";
    }else{
        echo "Mảng rỗng";
    }