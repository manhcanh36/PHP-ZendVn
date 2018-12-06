

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link type="text/css" href="style3.css" rel="stylesheet" media="screen">
</head>
<body>
<?php
    $day = "";
    $mon = "";
    $time = "";
    $name = "";
    $imga = "";
    if(isset($_POST["day"]) && isset($_POST["month"])){
        echo $day    =$_POST["day"];
        echo $mon    =$_POST["month"];
        if(is_numeric($day) && is_numeric($mon)){

        }
    }
?>
<div class="content">
    <h1> Lấy chỏm sao</h1>
    <form class="form" action="#" method="post " >
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
        $result ='<div class="result">
        <img src="imga/' . $imga . '.jpg" alt="' . $imga . '">
        <p> ' . $name . '<span>(' . $imga . ' : ' . $time . ')</span></p>
    </div>' ;
        echo $result;
        ?>

</div>
</body>
</html>