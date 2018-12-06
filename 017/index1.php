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
            function createBox(){
                $value = '<div style="width: 200px; height: 50px>"';
                $value .= '<p>Box A <span>(200x50)</span></p>';
                $value .= '</div>';
                return $value;
            }
            $result = createBox();
            echo $result;
        ?>

    </div>
</body>
</html>