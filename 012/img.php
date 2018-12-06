<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <div class="content">
        <h1>Image</h1>
        <div class="image">
            <?php
                $i=1;
                do{
                    echo "<img src='img/ban.jpg'>";
                    $flagshow =0;
                    if(isset($_GET["show"])){
                        $flagshow = $_GET["show"];
                        $i++;
                    }
                }while($i<=4 && $flagshow==1);
            ?>
            <a href="img.php?show=1">Show All</a>
        </div>
    </div>
</body>
</html>