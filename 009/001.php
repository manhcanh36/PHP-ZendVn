

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link type="text/css" href="style4.css" rel="stylesheet" media="screen">
</head>
<body>
<?php
$day = "";
$mon = "";
$imga = "";
$name = "";
$time = "";
$result = "";
if(isset($_POST["day"]) && isset($_POST["month"])){
    echo $day    =$_POST["day"];
    echo $mon    =$_POST["month"];
    $flagShow      = true;
    if(is_numeric($day) && is_numeric($mon)){

        switch ($mon){
            case 1:
                if($day <= 19){
                    $imga = "ban";
                    $name = "ma kết";
                    $time = "23/12 - 19-1";
                }
                if($day >= 20){
                    $imga = "bando";
                    $name = "Bảo bình";
                    $time = "20/01 - 19/02";
                }
                if($day < 1 || $day > 31 ) $flagShow = false;
                break;
            case 1:
                if($day <= 19){
                    $imga = "bando";
                    $name = "Bảo bình";
                    $time = "20/01-19/02";
                }
                if($day >= 20){
                    $imga = "banghe";
                    $name = "Song ngư";
                    $time = "20/02 - 21/03";
                }
                if($day < 1 || $day > 29 ) $flagShow = false;
                break;
            default:
                $flagShow = false;
                break;
        }
        if($flagShow == true){
            $result = '<div class="result">  
        <img src="imga/' . $imga . '.jpg" alt="' . $imga . '">
        <p> ' . $name . '<span>(' . ucfirst($imga) . ' : ' . $time . ')</span></p>
    </div>';
        } else {
            $result = "Dữ liệu ko hợp lệ";
        }
    }else{
        $flagShow = false;
        $result = "Dữ liệu ko hợp lệ";
    }
}
?>
<div class="content">
    <h1> Lấy chỏm sao</h1>
    <form class="form" action="" method="post " >
        <div class="row">
            <span>Ngày sinh</span>
            <input type="text" name="day" value="<?php echo  $day;?>">
        </div>
        <div class="row">
            <span>Tháng sinh</span>
            <input type="text" name="month" value="<?php echo  $mon;?>">
        </div>
        <div class="row">

            <input type="submit" value="Lấy chỏm sao" >

    </form>


    <?php

    echo $result;
    ?>

</div>
</body>
</html>