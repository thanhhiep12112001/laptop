<?php
include '../model/config.php';
function loadClass($cName)
{
    include "../model/$cName.php";
}
spl_autoload_register('loadClass');


if (isset($_SESSION['admin'])) {
    $product = new Orders();
    $kw = isset($_GET['keyword']) ? $_GET['keyword'] : '';
    $data = $product->timkiem($kw);
    $n = $product->n;

    include '../viewAdmin/qlorder.php';
} else {
    $_SESSION['thongbao']="thong bao";
    header("location:" . '/web/website/ControllerLogin/login.php');
}
