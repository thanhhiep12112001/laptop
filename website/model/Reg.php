<?php
class Reg extends Db
{
    function getAll()
    {
        $sql = "select * from users";
        return $this->selectQuery($sql);
    }
    function tim($email)
    {
        $sql = "select * from user where email like ?";
        $param = ["%$email%"];
        return $this->selectQuery($sql, $param);
    }
    function store()
    {
        $hoten = isset($_POST['hoten']) ? $_POST['hoten'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $password = isset($_POST['password']) ? md5($_POST['password']) : '';
        $sdt = isset($_POST['sdt']) ? $_POST['sdt'] : '';
        $diachi = isset($_POST['diachi']) ? $_POST['diachi'] : '';
        $param = [
            'email' => $email,
            'password' => $password,
            'hoten' => $hoten,
            'sdt' => $sdt,
            'diachi' => $diachi
        ];
        $querry="INSERT INTO user (email,password,hoten,sdt,diachi) 
        VALUES (:email,:password,:hoten,:sdt,:diachi)";
        $this->updateQuery($querry, $param);
    }
}
