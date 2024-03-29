<?php
include '../model/config.php';
function loadClass($cName)
{
  include "../model/$cName.php";
}
spl_autoload_register('loadClass');

if ($_POST['password'] == $_POST['password2']) {
  $l = new Reg();
  if($l->tim($_POST['email'])){
    $_SESSION['error']="error";
    header('location:/web/website/ControllerLogin/reg.php');
  }else{
  
  $l->store();
  header('location:/web/website/ControllerLogin/login.php');
  }
}else{
  $_SESSION['error1']="error1";
  header('location:/web/website/ControllerLogin/reg.php');
}
