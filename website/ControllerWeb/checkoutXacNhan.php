<?php
include '../model/config.php';
function loadClass($cName)
{
    include "../model/$cName.php";
}
spl_autoload_register('loadClass');

$checkout = new Checkout;
if ($_POST['action'] == 'checkout') {
    $idorder = random_int(0, 999999);
    $tim = new Checkout;
    if ($tim->tim($idorder)) {
        while ($tim->tim($idorder)) {
            $idorder = random_int(0, 999999);
        }
    }
    $checkout->addOrder($idorder);
    $checkout->addOrderDetail($idorder);
    unset($_SESSION['cart']);

    header("location:" . URL);
}
