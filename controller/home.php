<?php
session_start();
// @include('/Applications/XAMPP/xamppfiles/htdocs/mvc_loginproject/controller/blockURL.php');
@include('/Applications/XAMPP/xamppfiles/htdocs/mvc_loginproject/model/home.php');
@include('/Applications/XAMPP/xamppfiles/htdocs/mvc_loginproject/controller/user.php');
// @include('/Applications/XAMPP/xamppfiles/htdocs/mvc_loginproject/controller/manage-user.php');

// include('/Applications/XAMPP/xamppfiles/htdocs/mvc_loginproject/controller/register.php');
class homeController{
    public $obj;
    public $getResult;
    // public $obj2;
    
    function __construct()
    {  
        $this->getResult = new \controllers\user\UserController;
        $this->obj = new models\homeModel();
        // $this->obj2 = new controllers\registerController;
    }
    function manageUser(){
        // @include('/Applications/XAMPP/xamppfiles/htdocs/mvc_loginproject/model/user.php');
        @include('/Applications/XAMPP/xamppfiles/htdocs/mvc_loginproject/view/include/header.php');
        @include('/Applications/XAMPP/xamppfiles/htdocs/mvc_loginproject/view/manageUser.php');
        @include('/Applications/XAMPP/xamppfiles/htdocs/mvc_loginproject/view/include/footer.php');

    }
    function user(){
        @include('/Applications/XAMPP/xamppfiles/htdocs/mvc_loginproject/view/include/header.php');
        $row = $this->getResult->setSession();
        $result = $this->getResult->deleteDataVal();
        $result = $this->getResult->getData();
        @include('/Applications/XAMPP/xamppfiles/htdocs/mvc_loginproject/view/user.php');
        @include('/Applications/XAMPP/xamppfiles/htdocs/mvc_loginproject/view/include/footer.php');
    }

    function login(){
        @include('/Applications/XAMPP/xamppfiles/htdocs/mvc_loginproject/view/include/header.php');
        @include('/Applications/XAMPP/xamppfiles/htdocs/mvc_loginproject/view/login.php');
        @include('/Applications/XAMPP/xamppfiles/htdocs/mvc_loginproject/view/include/footer.php');
    }
    function register(){ 
        // $this->obj2->reg();
        @include('/Applications/XAMPP/xamppfiles/htdocs/mvc_loginproject/view/include/header.php');
        @include('/Applications/XAMPP/xamppfiles/htdocs/mvc_loginproject/view/register.php');
        @include('/Applications/XAMPP/xamppfiles/htdocs/mvc_loginproject/view/include/footer.php');

    }
    function home(){
        $arr = $this->obj->page(1);
        @include('/Applications/XAMPP/xamppfiles/htdocs/mvc_loginproject/view/include/header.php');
        @include('/Applications/XAMPP/xamppfiles/htdocs/mvc_loginproject/view/include/page.php');
        @include('/Applications/XAMPP/xamppfiles/htdocs/mvc_loginproject/view/include/footer.php');
    }

    function about(){

        $arr = $this->obj->page(2);
        @include('/Applications/XAMPP/xamppfiles/htdocs/mvc_loginproject/view/include/header.php');
        @include('/Applications/XAMPP/xamppfiles/htdocs/mvc_loginproject/view/include/page.php');
        @include('/Applications/XAMPP/xamppfiles/htdocs/mvc_loginproject/view/include/footer.php');
    }

    function contact(){
        $arr = $this->obj->page(3);
        @include('/Applications/XAMPP/xamppfiles/htdocs/mvc_loginproject/view/include/header.php');
        @include('/Applications/XAMPP/xamppfiles/htdocs/mvc_loginproject/view/include/page.php');
        @include('/Applications/XAMPP/xamppfiles/htdocs/mvc_loginproject/view/include/footer.php');
    }

}
?>