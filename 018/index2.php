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
            function createBox($value){
                echo $value. '<br>';
                if($value % 2 == 0){
                    return true;
                }else{
                    return false;
                }

            }
            $result = createBox(20);
                if($result == true){
                    echo"Số chẵn";
                }else{
                    echo"Số lẻ";
                }
        ?>

    </div>
</body>
</html>