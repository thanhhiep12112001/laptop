<?php
include '../model/config.php';
function loadClass($cName)
{
    include "../model/$cName.php";
}
spl_autoload_register('loadClass');

if (isset($_SESSION['admin'])) {
    $cat = new Category();
    $cat->update();
    header('location:' . "/web/website/ControllerCategory/category.php");
} else {
    $_SESSION['thongbao']="thong bao";
    header("location:" . '/web/website/ControllerLogin/login.php');
}
