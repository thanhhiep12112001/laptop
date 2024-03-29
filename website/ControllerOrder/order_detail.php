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
    $order_detail = new Orders_Detail();
    $dataDetail = $order_detail->timkiem($kw);

    include '../viewAdmin/forder_detail.php';
} else {
    $_SESSION['thongbao']="thong bao";
    header("location:" . '/web/website/ControllerLogin/login.php');
}
