<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$n= 0;
for($i = 0;$i <=100 ;$i++){
    if($n <3){
        if($i % 8 ==0 && $i >0){
            echo $i."<br>";
        }
    }else{
        break;
    }
}
?>
</body>
</html>