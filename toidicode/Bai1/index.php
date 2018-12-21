<?php
class personnel{
    private $name = 'Nguyen Van A';
    private $age = 21;
    public function getpersonnel(){
        return $this ->name . '-'. $this ->age;
    }
}