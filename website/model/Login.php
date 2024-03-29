<?php
class Login extends Db
{
    function getAll(){
        $sql ="select * from user";
        return $this->selectQuery($sql);
    }
    function timUser($email,$password){
        $sql ="select * from `user` where email like ?";
        $param=["%$email%"];
        if($password!=''){
            $sql = $sql. ' and password = ? '; 
            $param[] = $password;
        }
        return $this->selectQuery($sql,$param);
    }
    function timAdmin($email,$password){
        $sql ="select * from `admin` where email like ?";
        $param=["%$email%"];
        if($password!=''){
            $sql = $sql. ' and password = ? '; 
            $param[] = $password;
        }
        return $this->selectQuery($sql,$param);
    }
}
