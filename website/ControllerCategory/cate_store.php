<?php
include '../model/config.php';
function loadClass($cName)
{
    include "../model/$cName.php";
}
spl_autoload_register('loadClass');

//print_r($_POST);
if (isset($_SESSION['admin'])) {
    $cat = new Category();
    // $cat->store();
    // header('location:' . "/web/website/ControllerCategory/category.php");
    if ($cat->tim($_POST['idcat'])) {
        $_SESSION['error'] = "error";
        header('location:/web/website/ControllerCategory/category.php');
    } else {
        $cat->store();
        header('location:' . "/web/website/ControllerCategory/category.php");
    }
} else {
    $_SESSION['thongbao'] = "thong bao";
    header("location:" . '/web/website/ControllerLogin/login.php');
}
