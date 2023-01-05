<?php
namespace models;
class homeModel{
    public $con;
    function __construct()
    {
        $this->con = new \mysqli('localhost', 'root', '', 'mvc_detail'); 
    }

    function page($id){
        $sql = "SELECT title, data FROM page Where id = '$id'";
        $stmt = $this->con->query($sql);
        $res = $stmt->fetch_assoc();
        $arr = $res;
        return $arr;
    }
}

?>