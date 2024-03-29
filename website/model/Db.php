<?php
class Db{
    private $connect = null;
    public $n=0; //so dong kq

    function __construct()
    {
        
        $this->connect = new PDO("mysql:host=".HOST.";dbname=".DB,USER,PASSWORD);
    }

    /*
    - ham use cho cac cau sql up,insert,delete
    - sql: query co tham so
    - param: mang co data cho cac tham so
    - return cac dong trong database
    */
    protected function selectQuery($sql,$param=[]){
        $stm = $this->connect->prepare($sql);
        $stm->execute($param);
        $data = $stm->fetchAll(PDO::FETCH_ASSOC);
        $this->n = $stm->rowCount();
        return $data;
    }

    /*
    - ham use cho cac cau sql up,insert,delete
    - sql: query co tham so
    - param: mang co data cho cac tham so
    - return ve cac dong
    - protected+public dc ke thua ,private ngc lai
    */
    protected function updateQuery($sql,$param=array()){
       
        $stm = $this->connect->prepare($sql);
        $stm->execute($param);
        $this->n = $stm->rowCount();
        //print_r($stm);
        return $this->n;
    }
}