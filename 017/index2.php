<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="content">
        <?php
            function createBox(){
                $value =12;
                if($value % 2 == 0){
                    return true;
                }else{
                    return false;
                }
            }
            $result = createBox();
            if($result == true){
                echo"Số chẵn";
            }else{
                echo"Số lẻ";
            }
        ?>

    </div>
</body>
</html>