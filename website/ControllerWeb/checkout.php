<?php
include '../model/config.php';
function loadClass($cName)
{
    include "../model/$cName.php";
}
spl_autoload_register('loadClass');

$hoten = $_POST['hoten'];
$diachi = $_POST['diachi'];
$sdt = $_POST['sdt'];



include '../viewWeb/viewCheckout.php';
