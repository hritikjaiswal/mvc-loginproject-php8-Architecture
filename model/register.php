<?php

class registerModel{
    public $register_detail;

    public $con;
    function __construct(){
        $this->con = new \mysqli('localhost', 'root', '', 'mvc_detail'); 
    }
    function con(){
        return $this->con;
    }
}


?>