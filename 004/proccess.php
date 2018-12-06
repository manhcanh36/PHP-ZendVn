<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 11/18/2018
 * Time: 7:18 AM
 */
  //  echo $_REQUEST["email"];
   // echo $_REQUEST["password"];
$userName = $_GET["email"];
$userName = $_GET["password"];
$result = ($userName == "admin" && $password == "1234") ? "Đăng nhập thành công" : "Đăng nhập thất bại";
echo $result;
