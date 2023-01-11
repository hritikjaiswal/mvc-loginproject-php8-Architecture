<?php
session_start();
use models\homeModel;

@include ('/Applications/XAMPP/xamppfiles/htdocs/mvc_loginproject/model/home.php');

class classController extends homeModel{

    public function login($email, $pass){

        $pass = md5($pass);
        $select = "SELECT * FROM detail WHERE email= '$email' && password = '$pass'";
        $check = mysqli_query($this->connect(),$select);
        $data = mysqli_fetch_array($check);
        $result = mysqli_num_rows($check);

        if($result == 1){
            $_SESSION['login'] = true;  
            $_SESSION['id'] = $data['id'];
            return true;
        }else{
            return false;
        }

    }
    public function session(){
        if(isset($_SESSION['login'])){
            return $_SESSION['login'];
        }
       }

}
?>