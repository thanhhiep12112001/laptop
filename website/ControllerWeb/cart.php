<?php
include '../model/config.php';
function loadClass($cName)
{
    include "../model/$cName.php";
}
spl_autoload_register('loadClass');


$id = isset($_POST['id']) ? $_POST['id'] : '';
$qty = isset($_POST['qty']) ? $_POST['qty'] : 1;
$action = isset($_POST['action']) ? $_POST['action'] : '';
$cart = new Cart();
//print_r($_POST);
if ($action == 'luu') {
    //print_r($_POST);
    $cart->save($_POST['id'], $_POST['gia']);
}

//$cart->__construct();
// $cart->add($id, $qty);
if ($action == 'them') {
    $cart->add($id, $qty);
}
if ($action == 'xoa') {
    $cart->delete($id);
}


$dataCart = $cart->show();
//print_r($cart->show());
include '../viewWeb/viewcart.php';
