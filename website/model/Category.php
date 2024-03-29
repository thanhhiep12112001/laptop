<?php
class Category extends Db
{
    function getAll()
    {
        $sql = "select * from category";
        return $this->selectQuery($sql);
    }
    function ramdom($n = 4)
    {
        $sql = "select * from category order by rand() limit 0, $n";
        return $this->selectQuery($sql);
    }
    function tim($keyword)
    {
        $sql = "select * from category where idcat like ? ";
        $param = ["%$keyword%"];
        return $this->selectQuery($sql, $param);
    }
    function timkiem($keyword)
    {
        $sql = "select * from category where name like ? ";
        $param = ["%$keyword%"];
        return $this->selectQuery($sql, $param);
    }
    function delete($idcate)
    {
        $sql = "delete from category where idcat = ?";
        $param = [$idcate];
        $n = $this->updateQuery($sql, $param);
        return $n;
    }
    function detail($idcate)
    {
        $sql = "select * from category where idcat = ?";
        $param = [$idcate];
        $data = $this->selectQuery($sql, $param);
        //mang 2 chieu co 1 ptu data[0]
        if (count($data) > 0);
        return $data[0];
        return [];
    }
    function update()
    {
        $idcate = isset($_POST['idcat']) ? $_POST['idcat'] : '';
        $ten = isset($_POST['name']) ? $_POST['name'] : '';
        $sql = "update category set name=? where idcat = ? ";
        $param = [$ten, $idcate];
        //echo $sql;
        $n = $this->updateQuery($sql, $param);
        //echo "sua $n";  
    }
    function store()
    {
        $idcate = isset($_POST['idcat']) ? $_POST['idcat'] : '';
        $ten = isset($_POST['name']) ? $_POST['name'] : '';
        $sql = "INSERT INTO category (idcat, `name`) 
            VALUES (?, ?)";

        $param = [$idcate, $ten];
        $n = $this->updateQuery($sql, $param);
    }
}
