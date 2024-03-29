<?php
class Orders extends Db
{
    function getAll()
    {
        $sql = "select * from `order`";
        return $this->selectQuery($sql);
    }
    function ramdom($n = 4)
    {
        $sql = "select * from `order` by rand() limit 0, $n";
        return $this->selectQuery($sql);
    }
    function timkiem($keyword)
    {
        $sql = "select * from `order` where email like ? ";
        $param = ["%$keyword%"];
        return $this->selectQuery($sql, $param);
    }
    function timkiemID($keyword)
    {
        $sql = "select * from `order` where idorder like ? ";
        $param = ["%$keyword%"];
        return $this->selectQuery($sql, $param);
    }
    function detail($idorder)
    {
        $sql = "select * from `order` where idorder = ?";
        $param = [$idorder];
        $data = $this->selectQuery($sql, $param);
        //mang 2 chieu co 1 ptu data[0]
        if (count($data) > 0);
        return $data[0];
        return [];
    }
    function update($id,$status)
    {
        $sql = "update `order` set trangthai=? where idorder = ? ";
        $param = [$status, $id];
        //echo $sql;
        $n = $this->updateQuery($sql, $param);
        //echo "sua $n";  
    }
}
