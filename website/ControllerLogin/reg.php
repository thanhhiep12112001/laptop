<?php
include '../model/config.php';
function loadClass($cName)
{
    include "../model/$cName.php";
}
spl_autoload_register('loadClass');

if(isset($_SESSION['error'])){
    echo "<script>alert('Trùng email !!!!!')</script>";
    unset($_SESSION['error']);
}
if(isset($_SESSION['error1'])){
    echo "<script>alert('Pass không trùng !!!!!')</script>";
    unset($_SESSION['error1']);
}
include '../viewLogin/reg.php';