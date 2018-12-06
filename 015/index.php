<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="content">
        <h1>Giải câu đố bằng vòng lặp</h1>
        <div class="question">
            <p>Yêu nhau cau sáu bổ ba</p>
            <p>Ghét nhau cau sáu bổ ra làm mười</p>
            <p>Mỗi người một miếng trăm người</p>
            <p>Có mười bảy quả hỏi người ghét yêu</p>
            <p>Hỏi có bao nhiêu người yêu nhau, ghét nhau ?</p>
        </div>
        <div class="answer">
            <p> Đáp án</p>
            <ul>
                <?php
                    for($x = 1; $x<=30;$x++){
                        for($y=1;$y<=9;$y++){
                            if(3*$x + 10*$y ==100 && $x + $y ==17){
                                echo"<li>$x người yêu nhau, $y người ghét nhau</li>";
                            }
                        }
                    }
                ?>
            </ul>
        </div>
    </div>
</body>
</html>