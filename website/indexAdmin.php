<?php

include './model/config.php';
function loadClass($cName)
{
    include "./model/$cName.php";
}
spl_autoload_register('loadClass');

if (isset($_SESSION['admin'])) {
    
    include './viewAdmin/home.php';
} else {
    $_SESSION['thongbao']="thong bao";
    header("location:" . '/web/website/ControllerLogin/login.php');
}
