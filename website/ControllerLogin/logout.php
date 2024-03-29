<?php
include '../model/config.php';
function loadClass($cName)
{
    include "../model/$cName.php";
}
spl_autoload_register('loadClass');
if(isset($_SESSION['admin'])){
unset($_SESSION['admin']);
}else{
unset($_SESSION['user']);
}
header("location:".'/web/website/ControllerLogin/login.php');