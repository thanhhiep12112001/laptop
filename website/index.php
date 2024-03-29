<?php 

include './model/config.php';
function loadClass($cName)
{
    include "./model/$cName.php";
}
spl_autoload_register('loadClass');
$product = new Product();
$dataBS = $product->getBestSell();
$dataNew = $product->getNew();
$cart =new Cart();
$dataCart = $cart->show();
//var_dump($_SESSION['admin']);
include './viewWeb/home.php';