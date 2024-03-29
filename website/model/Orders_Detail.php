<?php
class Orders_Detail extends Db
{
    function getAll()
    {
        $sql = "select * from `orderdetail`";
        return $this->selectQuery($sql);
    }
    function ramdom($n = 4)
    {
        $sql = "select * from orderdetail `order` by rand() limit 0, $n";
        return $this->selectQuery($sql);
    }
    function timkiem($keyword)
    {
        $sql = "select * from `orderdetail` where idorder like ? ";
        $param = ["%$keyword%"];
        return $this->selectQuery($sql, $param);
    }
    function detail($idorder)
    {
        $sql = "select * from `product` where idproduct = ?";
        $param = [$idorder];
        $data = $this->selectQuery($sql, $param);
        //mang 2 chieu co 1 ptu data[0]
        if (count($data) > 0);
        return $data[0];
        return [];
    }
}