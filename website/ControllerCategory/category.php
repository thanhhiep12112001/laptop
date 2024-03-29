<?php
include '../model/config.php';
function loadClass($cName)
{
    include "../model/$cName.php";
}
spl_autoload_register('loadClass');
if (isset($_SESSION['admin'])) {
    
    $category = new Category();
    $kw = isset($_GET['keyword']) ? $_GET['keyword'] : '';
    $data = $category->timkiem($kw);
    $n = $category->n;
    if(isset($_SESSION['true'])){
        echo "<script>alert('Bạn đã xóa thành công')</script>";
        unset($_SESSION['true']);
    }
    if(isset($_SESSION['false'])){
        echo "<script>alert('Danh mục này không thể xóa !!!!!')</script>";
        unset($_SESSION['false']);
    }
    if(isset($_SESSION['error'])){
        echo "<script>alert('LỖI !!!!!')</script>";
        unset($_SESSION['error']);
    }    
    include '../viewAdmin/qlcategory.php';
} else {
    $_SESSION['thongbao']="thong bao";
    header("location:" . '/web/website/ControllerLogin/login.php');
}
