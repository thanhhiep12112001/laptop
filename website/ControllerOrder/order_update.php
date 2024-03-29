<?php
include '../model/config.php';
function loadClass($cName)
{
    include "../model/$cName.php";
}
spl_autoload_register('loadClass');


if (isset($_SESSION['admin'])) {
    $product = new Orders();
    $kw = $_GET['id'];
    //print_r($_GET);
    $data = $product->timkiemID($kw);
    //print_r($data[0]['trangthai']);
    if ($data[0]['trangthai'] == 0) {
        $product->update($kw,1);
    }else{
        $product->update($kw,0);
    }

    header("location:" . '/web/website/ControllerOrder/orders.php');
} else {
    $_SESSION['thongbao']="thong bao";
    header("location:" . '/web/website/ControllerLogin/login.php');
}
