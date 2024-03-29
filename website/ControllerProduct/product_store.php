<?php
include '../model/config.php';
function loadClass($cName)
{
    include "../model/$cName.php";
}
spl_autoload_register('loadClass');

//print_r($_POST);

// if (isset($_SESSION['admin'])) {

    $pro = new Product();
    if ($pro->tim($_POST['idproduct'])) {
        $_SESSION['error'] = "error";
        header('location:' . "/web/website/ControllerProduct/product.php");
    } else {
        $pro->store();
        header('location:' . "/web/website/ControllerProduct/product.php");
    }
    
// } else {
//     $_SESSION['thongbao']="thong bao";
//     header("location:" . '/web/website/ControllerLogin/login.php');
// }
