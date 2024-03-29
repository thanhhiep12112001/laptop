<?php
include '../model/config.php';
function loadClass($cName)
{
    include "../model/$cName.php";
}
spl_autoload_register('loadClass');



$action = isset($_POST['action']) ? $_POST['action'] : '';
if ($action == 'thanhtoan') {
    if(isset($_SESSION['user'])){
        include '../viewWeb/viewCart2.php';
    }
    else{
        header('location:'.'/web/website/ControllerLogin/login.php');
    }



    
}

