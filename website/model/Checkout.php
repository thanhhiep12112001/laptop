<?php
class Checkout extends Db
{
    function tim($id)
    {
        $sql = "select * from `order` where idorder like ?";
        $param = ["%$id%"];
        return $this->selectQuery($sql, $param);
    }
    function show()
    {
        return $this->cart;
    }
    function detail($id)
    {
        $sql = "select * from product where idproduct = ?";
        $param = [$id];
        $data = $this->selectQuery($sql, $param);
        //mang 2 chieu co 1 ptu data[0]
        if (count($data) > 0);
        return $data[0];
        return [];
    }
    function addOrder($idorder)
    {
        //kiem tra lay thong tin trong db neu co them vao

        $email = $_SESSION['user']['email'];
        $ngaydat = date("Y-m-d");
        $ngaygiao = date("Y-m-d", strtotime('+5 day'));
        $tennguoinhan = $_POST['hoten'];
        $diachinguoinhan = $_POST['diachi'];
        $trangthai = 0;
        $sdt = $_POST['sdt'];
        $thanhtien = $_POST['tong'];
        $param = [
            'idorder' => $idorder,
            'email' => $email,
            'ngaydat' => $ngaydat,
            'trangthai' => $trangthai,
            'ngaygiao' => $ngaygiao,
            'tennguoinhan' => $tennguoinhan,
            'sdt' => $sdt,
            'diachinguoinhan' => $diachinguoinhan,
            'thanhtoan' => $thanhtien
        ];
        $sql = "INSERT INTO `order` (idorder, email, ngaydat, trangthai, ngaygiao, tennguoinhan, sdt, diachinguoinhan, thanhtoan) 
        VALUES (:idorder,:email,:ngaydat,:trangthai,:ngaygiao,:tennguoinhan,:sdt,:diachinguoinhan,:thanhtoan)";

        $this->updateQuery($sql, $param);
    }
    function addOrderDetail($idorder)
    {
        //kiem tra lay thong tin trong db neu co them vao

        print_r($idorder);
        var_dump($_SESSION['cart']);
        foreach ($_SESSION['cart'] as $item) {
            $param = [
                'idorder' => $idorder,
                'soluong' => $item['qty'],
                'gia' => $item['price'],
                'idproduct' => $item['id']
            ];
            $sql = "INSERT INTO `orderdetail` (idorder, soluong, gia, idproduct) 
        VALUES (:idorder, :soluong, :gia ,:idproduct)";

            $this->updateQuery($sql, $param);
        }
    }
}
