<?php
include '../model/config.php';
function loadClass($cName)
{
    include "../model/$cName.php";
}
spl_autoload_register('loadClass');

if (isset($_SESSION['admin'])) {
    $id = isset($_GET['id']) ? $_GET['id'] : '';
    if ($id !== '') {
        $pro = new Product();
        $detail = $pro->detail($id);

        $cat = new Category();
        $datacat = $cat->getAll();

        include '../viewAdmin/fproduct_edit.php';
    }
} else {
    $_SESSION['thongbao']="thong bao";
    header("location:" . '/web/website/ControllerLogin/login.php');
}
