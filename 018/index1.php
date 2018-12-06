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
            function createBox($content){
                $value = '<div style="width: 200px; height: 50px>"';
                $value .= '<p>'.$content.' <span>(200x50)</span></p>';
                $value .= '</div>';
                return $value;
            }
            $box1 = createBox("Box A");
            $box2 = createBox("Box B");
            echo $box1 . $box2;
        ?>

    </div>
</body>
</html>