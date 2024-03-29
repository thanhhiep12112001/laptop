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
        $cat = new Category();
        $detail = $cat->detail($id);
        include '../viewAdmin/fcate_edit.php';
    }
} else {
    $_SESSION['thongbao']="thong bao";
    header("location:" . '/web/website/ControllerLogin/login.php');
}
