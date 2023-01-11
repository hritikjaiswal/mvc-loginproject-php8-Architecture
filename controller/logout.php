<?php
@include ('/Applications/XAMPP/xamppfiles/htdocs/mvc_loginproject/model/home.php');
class logoutController{
    function logout(){
        session_start();
        session_unset();
        session_destroy();
        header('location: /mvc_loginproject/index.php?function=login');
    }
}

 ?>