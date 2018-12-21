<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Jumbotron Template for Bootstrap</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
    <?php
            $r="";
            define("PI",3.14);
            function tinhs($r){
                $dt = PI * pow($r,2);
                return $dt;
            }
            function tinhp($r){
                $cv = 2 * PI * $r;
                return $cv;
            }

    ?>
<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div id="result" class="col-md-12">
            <form name="bmi" action="" method="post">
                <div class="form-group">
                    <label>Bán Kính Đường Tròn ( M ) : </label>
                    <input required name="height" type="text" class="form-control" placeholder="Nhập Bán Kính" value="<?php echo $r; ?>">
                </div>
                <div class="form-group">
                    <label>Diện Tích</label>
                    <?php
                        echo tinhs($r);
                    ?>
                </div>
                <div class="form-group">
                    <label>Chu Vi</label>
                    <?php
                    echo tinhp($r);
                    ?>
                </div>
                <button type="submit" class="btn btn-default">Tính</button>
            </form>

        </div>
    </div>
</div> <!-- /container -->
