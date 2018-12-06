<?php
    $con = array("PHP","Zend Framework","Zend Framework","Zend Framework","Zend Framework");

    function remove(&$array , $type = "first" , $total = 2){

        $result = array();
        if(!empty($array)){
            if($total >= count($array)){
                $result = $array;
                $array = null;
            }else {
                if ($type == "first") {
                    for ($i = 1; $i <= $total; $i++) {
                        $result[] = array_shift($array);
                    }
                } elseif ($type == "last") {
                    for ($i = 1; $i <= $total; $i++) {
                        $result[] = array_pop($array);
                    }
                }
            }
        }
        return $result;
    }
        echo "<pre>";
        print_r($con);
        echo "</pre>";

        $arr = remove($con, "first",20);
    echo "phần tử xóa <br>";
    echo "<pre>";
    print_r($arr);
    echo "</pre>";

    echo "Đã xóa<br>";
    echo "<pre>";
    print_r($con);
    echo "</pre>";
