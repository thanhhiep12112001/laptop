<?php 

include '../model/config.php';
function loadClass($cName)
{
    include "../model/$cName.php";
}
spl_autoload_register('loadClass');
$product = new Product();
$id = isset($_GET['id'])?$_GET['id']:'';
if($id==''){
    header('location:/web/website/index.php'); exit;
}
$dataDetail = $product->detail($id);
$dataNew = $product->getNew(4);
include '../viewWeb/viewdetail.php';