<?php

use models\homeModel;

@include '/Applications/XAMPP/xamppfiles/htdocs/mvc_loginproject/model/home.php';

$objdb = new models\homeModel;

if(!empty(isset($_POST['emailid'])) && isset($_POST['emailid'])){
    $email= $_POST['emailid'];
    $email_query = "SELECT * FROM detail WHERE email = '$email'";
    $email_query_run = $objdb->connect()->query($email_query);
    
    if(mysqli_num_rows($email_query_run)> 0){
        echo "Email already Exist. Use different one";
    } 
}
?>