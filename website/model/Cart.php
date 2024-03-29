<?php
class Cart
{
    protected $cart = [];
    function __construct()
    {
        if (!isset($_SESSION)) session_start();
        $this->cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
    }
    function add($id, $qty)
    {
        //neu da co trong gio hang tang sl len
        if (isset($this->cart[$id])) {
            $this->cart[$id]['qty'] += $qty;
        } else {
            //kiem tra lay thong tin trong db neu co them vao
            $product = new Product();
            $data = $product->detail($id);
            if (Count($data) > 0)  //co sp -> them
            {
                $this->cart[$id] = ['id' => $data['idproduct'], 'name' => $data['ten'], 'price' => $data['gia_km'], 'img' => $data['img'], 'qty' => $qty];
            }
        }
    }
    function save($id, $qty)
    {
        //print_r($qty);
        $this->cart[$id]['qty'] = $qty;
    }
    function delete($id)
    {
        unset($this->cart[$id]);
    }
    function show()
    {

        return $this->cart;
    }
    function __destruct()
    {
        $_SESSION['cart'] = $this->cart;
    }
}
