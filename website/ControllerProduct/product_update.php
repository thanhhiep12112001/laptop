<?php
include '../model/config.php';
function loadClass($cName)
{
    include "../model/$cName.php";
}
spl_autoload_register('loadClass');

// if (isset($_SESSION['admin'])) {
    $pro = new Product();
    $pro->update();
    header('location:' . "/web/website/ControllerProduct/product.php");
// } else {
//     $_SESSION['thongbao']="thong bao";
//     header("location:" . '/web/website/ControllerLogin/login.php');
// }
