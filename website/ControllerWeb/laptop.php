<?php
include '../model/config.php';
function loadClass($cName)
{
    include "../model/$cName.php";
}
spl_autoload_register('loadClass');
$laptop = new Product();
$data = $laptop->getAll();
$cart = new Cart();
$dataCart = $cart->show();
// echo '<pre>';
// print_r($data);
include '../viewWeb/laptop.php';
