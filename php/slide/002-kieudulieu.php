<?php
    //số nguyên
    $int= 3;
    //số thực
    $float = 12.3;
    //chuỗi
    $sting ='Nguyễn Văn A';
    //boolean
    $boolean = true;
    $boolean = false;
    //mảng
    $array_string = array(
        'Nguyễn Văn A',
        'Nguyễn Văn B',
        'Nguyễn Văn C'
    );
    $array_age = array(
        21,22,23
    );
    //dạng mảng chứa các phần tử hỗn hợp
    //mảng chứa các phần tử phân tách nhau bằng,
    $array_misc = array('Nguyễn Văn A',19, 'Nguyễn Văn B',22,true,3.15,$array_string,$array_age);

    //php object
    class student{
        //khai báo các thuộc tính
        public $name;
        public $age;
        public $location;
        //hàm khởi tạo của class

        public function __construct($name,$age,$location)
        {
            $this->name= $name;
            $this->age= $age;
            $this->location= $location;
        }
    }
    //Khởi tạo 1 đối tượng trong php
    $tuan = new  student('Nguyễn Văn M',21,'Hà Nội');
    $manh = new  student('Nguyễn Văn A',21,'Thanh Hóa');

    // null
    $null = null;

    //Resource

    //in ra 1 biến
    echo '<br> Biến số nguyên'.$int;
    echo '<br> Biến số thực'.$float;
    echo '<br> Biến chuỗi'.$sting;

    //in ra bằng print_r
    echo '<br> in ra bằng print_r';
    echo '<br> Biến số nguyên'.print_r($int);
    echo '<br> Biến số thực'.print_r($float);
    echo '<br> Biến chuỗi'.print_r($sting);
    echo '<br> Biến mảng'.print_r($array_misc);
    echo '<br> Biến object'.print_r($manh);

    echo '<pre>';
    print_r($array_misc);
    echo '</pre>';

    echo '<pre>';
    print_r($manh);
    echo '</pre>';

    //lệnh debug lỗi
    echo '<br> var_dump()';
    var_dump($int);
    echo '<br> var_dump()';
    var_dump($float);
    echo '<br> var_dump()';
    var_dump($sting);

    echo '<br> var_dump()';
    var_dump($array_misc);

    echo '<br> var_dump()';
    var_dump($null);

    echo '<br> var_dump()';
    var_dump($boolean);

    echo '<br> var_dump()';
    var_dump($manh);
    die; exit();


