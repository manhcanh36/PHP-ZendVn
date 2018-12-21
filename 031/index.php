<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
        }
        .content{
            width: 500px;
            padding: 10px;
            border: 2px solid #000000;
            height: auto;
            margin: 10px auto;
        }
    </style>
<head>
<body>

    <div class="content">
        <?php
        $group = array("Admin","Manager","Member","Guest");

        function create($name,$attribu,$array,$keyselect){
            $xhtml = "";
            if(!empty($array)){
                $xhtml .= '<select name="'.$name.'" id="'.$name.'" style="'.$attribu.'" >';
                foreach ($array as $key=>$value){
                    if($key ==$keyselect){
                        $xhtml .='<option value="'.$key.'" selected="selected">'.$value.'</option>';
                    }else{
                        $xhtml .='<option value="'.$key.'">'.$value.'</option>';
                    }
                }
                $xhtml .='</select>';
            }
            return $xhtml;
        }
        $groupselect = create("group","width:200px",$group,2);
        echo $groupselect;
        ?>
    </div>
</body>
</html>