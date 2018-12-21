<?php
    $cities = array();
    $cities[]= "Ha Noi";
    $cities[]= "Tp. HCM";
    $cities[]= "Da Nang";
echo '<pre>';
print_r($cities);
echo '</pre>';

    $cities_json= json_encode($cities);
    echo '<br>'. $cities_json;

    $multi = array(
        array('ten_tp' => 'ha noi', 'quan' => array(
            array('ten_quan' => 'thanh xuan', 'phuong' => array(
                array('ten_phuong' => '1'),
                array('ten_phuong' => '2'),
                array('ten_phuong' => '3'),
            )),
            array('ten_quan' => 'tay ho', 'phuong' => array(
            )),
            array('ten_quan' => 'hoan kiem', 'phuong' => array(
            )),
        )),
        array('ten_tp' => 'ho chi minh', 'quan' => array(
        )),
        array('ten_tp' => 'da nang', 'quan' => array(
        )),
        array('ten_tp' => 'hai phong', 'quan' => array(
        )),
    );
echo '<pre>';
print_r($multi);
echo '</pre>';

    $mutil_json = json_encode($multi);
    echo '<br>'.$mutil_json;