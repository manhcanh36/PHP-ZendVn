<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="style1.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="content">
        <?php
            $money=0;
            if(isset($_POST['money'])) $money = $_POST['money'];
        ?>
        <div class="info">
            <h1>Mô Phỏng Máy ATM</h1>
            <form action="" method="post">
                <p>Vui lòng nhập vào số tiền mà quý khách muốn thực hiện giao dịch</p>
                <input type="text" name="money" value="<?php echo number_format($money); ?>">
                <input type="submit" value="Rút Tiền">
            </form>
        </div>
        <div class="clr"></div>
        <div class="result">
            <div class="normal">
                <p class="col1">MệnhGiá</p>
                <p class="col2">SốLượng</p>
                <p class="col3">ThànhTiền</p>
            </div>
            <div class="clr"></div>
            <?php
            define("ONE",1000);
            define("TWO",2000);
            define("FIVE",5000);
            define("ONE_0",10000);
            define("TWO_0",20000);
            define("FIVE_0",50000);
            define("ONE_00",100000);
            define("TWO_00",200000);
            define("FINE_00",500000);
            $five00 = 0;
            $two00 = 0;
            if(is_numeric($money)&& $money >1000){
                while($money >= FINE_00){
                    $five00 +=1;
                    $money = $money - FINE_00;
                }
                while($money >= TWO_00){
                    $two00 +=1;
                    $money = $money - TWO_00;
                }
                $total = FINE_00 * $five00 + TWO_00 *$two00;
            }
            ?>
            <?php
                if($five00 >0) {
                    echo '<div class="normal">
                            <p class="col1">'.number_format(FINE_00).'</p>
                            <p class="col2">'.$five00.'</p>
                            <p class="col3">'.number_format(FINE_00 * $five00).'</p>
                          </div>
                           <div class="clr"></div>
                          ';

                }
                if($two00 >0) {
                    echo '<div class="normal">
                                <p class="col1">'.number_format(TWO_00).'</p>
                                <p class="col2">'.$two00.'</p>
                                <p class="col3">'.number_format(TWO_00 * $two00).'</p>
                              </div>
                               <div class="clr"></div>
                              ';

                }
            ?>

            <div class="clr">
            </div>
            <p class="total">Tổng Tiền: <?php echo number_format($total);?></p>
        </div>
    </div>
</body>
</html>