<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
        $chieucao =0;
        $cannang =0;
        if (isset($_POST['cao']) && is_numeric($_POST['cao']) && ($_POST['cao'] > 0)) {
            $chieucao = $_POST['cao'];
        }
        if (isset($_POST['nang']) && is_numeric($_POST['nang']) && ($_POST['nang'] > 0)) {
            $cannang = $_POST['nang'];
        }
        if($chieucao && $cannang) {
            $bmi = $cannang/($chieucao * $chieucao);
            $bmi = round($bmi, 3);
            if ($bmi < 18.5) {
                $result = "Gầy";
            } elseif (($bmi >= 18.5) && ($bmi <= 24.9)) {
                $result = "Bình thường";
            } elseif (($bmi >= 25) && ($bmi <= 29.9)) {
                $result = "Hơi béo";
            } elseif (($bmi >= 30) && ($bmi <= 34.9)) {
                $result = "Béo phì cấp độ 1";
            } elseif (($bmi >= 35) && ($bmi <= 39.9)) {
                $result = "Béo phì cấp độ 2";
            } elseif ($bmi >= 40) {
                $result = "Béo phì cấp độ 3";
            } else {
                $result = "Không xác định được";
            }
        }
    ?>
    <div class="content">
        <div class="col1">
            <h3>Chiều Cao( M ):</h3><br>
            <?php $val_height = isset($_POST['cao']) ? $_POST['cao'] : ''; ?>
            <input type="text" name="cao" placeholder="Nhập chiều cao đơn vị mét" value="<?php echo $val_height;?>">
        </div>
        <div class="col2">
            <h3>Cân Nặng ( KG ):</h3><br>
            <?php $val_weight = isset($_POST['nang']) ? $_POST['cao'] : ''; ?>
            <input type="text" name="nang" placeholder="Nhập cân nặng đơn vị kilogam" value="<?php echo $val_weight;?>">
        </div>
        <div class="col3">
            <h3>Chỉ Số Cơ Thể</h3>
                 <?php if (isset($bmi)) {
                     echo $bmi;
                 }
                 ?>
        </div>
        <div class="col4">
            <h3>Kết Quả<?php if (isset($bmi)) {
                                  echo $bmi;
                                }
                 ?></h3>
        </div>

        <button type="submit" class="btn">Tính BMI</button>
    </div>
</body>
</html>