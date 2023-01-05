<?php

class registerModel{
    public $register_detail;

    function __construct(){
        @include('/Applications/XAMPP/xamppfiles/htdocs/mvc_loginproject/model/home.php'); 
        $this->register_detail = new models\homeModel();
    }
    function insertDetail(){

        

    }
    

}


?>