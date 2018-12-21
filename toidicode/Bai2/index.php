<?php

    class ConNguoi{
        var $name;
        var $mat;
        var $mui;
        const sochan=2;
        //khai báo phương thức
        function an(){

        }
        function noi($caunoi)
        {
            //gọi phương thức trong class
            return $this ->getSochan();
        }
        function di(){

        }

        /**
         * @return mixed
         */
        public function getName()
        {
            //gọi thuộc tính động trong class
            return $this->name;
        }

        /**
         * @return mixed
         */
        public function getSoChan()
        {
            //gọi thuộc tính constant trong class
            return self::sochan;
        }
    }

    $connguoi = new ConNguoi();
    //gọi thuộc tính ngoài class và đồng thười gán giá trị mới cho thuộc tính
    $connguoi->name = 'Vũ Thanh Tài';
    //gọi lại thuộc tính để xem thay đổi
    echo $connguoi->name;
    //gọi phương thức
    echo $connguoi->noi('Vũ Thanh Tài');
