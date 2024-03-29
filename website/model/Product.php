<?php
class Product extends Db
{
    function getAll()
    {
        $sql = "select * from product";
        return $this->selectQuery($sql);
    }
    function ramdom($n = 4)
    {
        $sql = "select * from product order by rand() limit 0, $n";
        return $this->selectQuery($sql);
    }
    function tim($keyword)
    {
        $sql = "select * from product where idproduct like ? ";
        $param = ["%$keyword%"];
        
        return $this->selectQuery($sql, $param);
    }
    function timkiem($keyword, $idcat = '')
    {
        $sql = "select * from product where ten like ? ";
        $param = ["%$keyword%"];
        if ($idcat != '') {
            $sql = $sql . " and idcat=? ";
            $param[] = $idcat;
        }
        return $this->selectQuery($sql, $param);
    }
    function delete($idproduct)
    {
        $sql = "delete from product where idproduct = ?";
        $param = [$idproduct];
        $detail = $this->detail($idproduct);
        $img = $detail['img'];
        $n = $this->updateQuery($sql, $param);
        if ($n > 0) {
            unlink('../images/' . $img);
        }
        return $n;
    }
    function detail($idproduct)
    {
        $sql = "select * from product where idproduct = ?";
        $param = [$idproduct];
        $data = $this->selectQuery($sql, $param);
        //mang 2 chieu co 1 ptu data[0]
        if (count($data) > 0);
        return $data[0];
        return [];
    }
    function update()
    {
        $idproduct = isset($_POST['idproduct']) ? $_POST['idproduct'] : '';
        $ten = isset($_POST['ten']) ? $_POST['ten'] : '';
        $mota = isset($_POST['mota']) ? $_POST['mota'] : '';
        $gia = isset($_POST['gia']) ? $_POST['gia'] : '';
        $gia_km = isset($_POST['gia_km']) ? $_POST['gia_km'] : '';
        $idcat = isset($_POST['idcat']) ? $_POST['idcat'] : '';
        $detail = $this->detail($idproduct);
        $img1 = $detail['img'];
        if ($_FILES['img']['error'] > 0) {
            $sql = "update product set ten=?, mota=?, gia=?, idcat=?, gia_km=? 
                     where idproduct = ? ";
            $param = [$ten, $mota, $gia, $idcat, $gia_km, $idproduct];
        } else {
            $sql = "update product set ten=?, mota=?, gia=?, img=?, idcat=?, gia_km=? 
                where idproduct=?";
            $img = time() . '-' . $_FILES['img']['name'];
            $param = [$ten, $mota, $gia, $img, $idcat, $gia_km, $idproduct];
            move_uploaded_file($_FILES['img']['tmp_name'], '../images/' . $img);
        }
        $n = $this->updateQuery($sql, $param);
        if ($n > 0) {
            unlink('../images/' . $img1);
        }  
    }
    function store()
    {
        $idproduct = isset($_POST['idproduct']) ? $_POST['idproduct'] : '';
        $ten = isset($_POST['ten']) ? $_POST['ten'] : '';
        $mota = isset($_POST['mota']) ? $_POST['mota'] : '';
        $gia = isset($_POST['gia']) ? $_POST['gia'] : '';
        $gia_km = isset($_POST['gia_km']) ? $_POST['gia_km'] : '';
        $idcat = isset($_POST['idcat']) ? $_POST['idcat'] : '';
        $sql = "INSERT INTO product (idproduct, ten, mota, gia, img, idcat, gia_km) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";
        $img =   time() . '-' . $_FILES['img']['name'];
        $param = [$idproduct, $ten, $mota, $gia, $img, $idcat, $gia_km];
        move_uploaded_file($_FILES['img']['tmp_name'], '../images/' . $img);
        $n = $this->updateQuery($sql, $param);
    }
    function getNew($n=6){
        return $this->selectQuery("select * from product where new=1 limit 0, $n");
    }
    function getBestSell($n=6){
        return $this->selectQuery("select * from product where bestsell=1 limit 0, $n");
    }
}
