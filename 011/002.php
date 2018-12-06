<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link type="text/css" href="style.css" rel="stylesheet">
</head>
<body>

    <div class="content2">
        <h1> Vẽ Tam Giác</h1>
        <ul>
            <li><a href="002.php?type=1"><img src="img/ban.jpg"</a> </li>
            <li><a href="002.php?type=2"><img src="img/ban.jpg"</a> </li>
            <li><a href="002.php?type=3"><img src="img/ban.jpg"</a> </li>
        </ul>
        <div class="result">
            <?php
                $result='';
                if(isset($_GET['type'])){
                    $type = $_GET['type'];
                    switch ($type){
                        case 1:
                            $i=0;
                            while ($i<=5){
                                $result .= str_repeat('*',$i).'<br>';
                                $i++;
                            }break;
                        case 2:
                            $i=5;
                            while ($i >=1){
                                $result .= str_repeat('*',$i).'<br>';
                                $i--;
                            }break;
                        case 3:
                            $i=1;
                            $n=6;
                            /*
                             *$n = 6
                             *           *      i= 1, space = 5, *=1(space = n- i)(*= i*2 -1)
                             *          ***     i= 2 ,space =4 ,*= 3
                             *         *****
                             *
                              */
                            while($i<=$n){
                                $space = str_repeat("&nbsp;&nbsp",$n -$i);
                                $character = str_repeat("*",2*$i - 1);
                                $result .= $space .$character .'<br>';
                                $i++;
                            }break;
                    }
                }
                echo $result;
            ?>
        </div>
    </div>
</body>
</html>