<?php

class homeController{
    public $obj;
    public $obj2;
    
    function __construct()
    {  
        include('/Applications/XAMPP/xamppfiles/htdocs/mvc_loginproject/model/home.php');
        $this->obj = new models\homeModel();
        include('/Applications/XAMPP/xamppfiles/htdocs/mvc_loginproject/controller/register.php');
        $this->obj2 = new controller\registerController();
        
    }

    function register(){
        $arr = $this->obj2->reg();
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