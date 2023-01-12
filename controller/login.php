<?php

use models\homeModel;
// session_start();
@include ('/Applications/XAMPP/xamppfiles/htdocs/mvc_loginproject/controller/class.php');
class loginController{
    public $user;
    public $db;

    function __construct()
    {
       $this->user = new  classController;
       $this->db = new homeModel;
    }
    function login(){
        
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $login = $this->user->login($_REQUEST['email'], $_REQUEST['password']);

            if($login){
                $id = $_SESSION['id'];
                $user_result = "SELECT * FROM detail WHERE id = '$id'";
                $user_data = $this->db->connect()->query($user_result);
                
                if( $user_data->num_rows > 0){
                    $row = $user_data->fetch_array();
                    if($row['user_type'] == 'user'){
                        $_SESSION['id']== $row['id'];
                        $_SESSION['user_name'] = $row['fname'];
                        header('location: /mvc_loginproject/index.php?function=user');
                    }
                }else {
                }
            }
        }
    }
    function wrongLogin(){
        if(!($this->user->session())){
            if (!($this->user->session())){  
                header("location: /mvc_loginproject/index.php?function=login");  
                $_SESSION['status']  =  "incorrect email and password!";
             }
        }

    }
}
$login = new loginController;

$login->login();
$login->wrongLogin();
?>