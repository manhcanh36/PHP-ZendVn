<?php
    $firtname="Nguyễn Văn";
    $name="Mạnh";
    $fullname = $firtname ." ". $name;
    echo $fullname;
    echo "<br>";
    $number = 12.34;
    echo $number;
    echo "<br>";
    var_dump($firtname);
    echo"<br>";
    echo gettype($number);
    echo "<br>";
    settype($number,'int');
    echo $number;
    echo "<br>";
    define('Pi',3.14);
    echo Pi;
    echo"<br>";
    define('couse','PHP');
    echo couse;
?>