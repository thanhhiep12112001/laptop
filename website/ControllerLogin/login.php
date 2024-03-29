<?php
include '../model/config.php';
function loadClass($cName)
{
    include "../model/$cName.php";
}
spl_autoload_register('loadClass');


$email = isset($_POST['username']) ? $_POST['username'] : '';
$p = isset($_POST['password']) ? $_POST['password'] : '';

if ($email && md5($p)) {
    $tim = new Login();
    if ($tim->timAdmin($email, md5($p))) {
        $data = $tim->timAdmin($email, md5($p));
        $_SESSION["admin"] = $data[0];
        // var_dump($_SESSION['admin']);
        header("location:" . URLAD);
    } else if ($tim->timUser($email, md5($p))) {
        $data = $tim->timUser($email, md5($p));
        $_SESSION["user"] = $data[0];
        //var_dump($_SESSION['user']);
        header("location:" . URL);
    } else {
        echo "<script>alert('Sai thông tin tài khoản hoặc mật khẩu.')</script>";
    }
}

//var_dump($_SESSION['thongbao']);
if(isset($_SESSION["thongbao"])){
  echo "<script>alert('Bạn cần phải đăng nhập 👌👌👌.')</script>";
  unset($_SESSION['thongbao']);
}


include '../viewLogin/login.php';