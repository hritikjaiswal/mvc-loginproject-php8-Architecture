<?php

namespace controllers\user;

use user;

@include('/Applications/XAMPP/xamppfiles/htdocs/mvc_loginproject/model/user.php');

class UserController
{
    public $user;

    function __construct()
    {
        $this->user = new \user;
    }
    function getDetail()
    {
        return $this->user;
    }
    function setSession()
    {
        // if (($_SESSION['user_name'])) {

        //     header('location: /mvc_loginproject/index.php?function=user');
        // }
        if (!isset($_SESSION['user_name'])) {

            header('location: /mvc_loginproject/index.php?function=login');
        } else {

            $id = $_SESSION['id'];
            $user_result = "SELECT * FROM detail WHERE id = '$id'";
            $user_data = $this->user->con()->query($user_result);
            $row = $user_data->fetch_array();
            return $row;
        }
    }

    function deleteDataVal()
    {

        if (isset($_GET['type']) && $_GET['type'] == 'delete') {

            $id = $this->user->get_safe_str($_GET['id']);
            $condition_arr = array('id' => $id);
            $this->user->deleteData('detail', $condition_arr);
            header('location: /mvc_loginproject/index.php?function=user');
        }
    }

    function getData()
    {
        // if(!isset($_SESSION['admin_name'])){


        //     header('location: /login_project/view/index.php');
        // }
        // else{

        //     $id = $_SESSION['id'];
        //     $user_result = "SELECT * FROM detail WHERE id = '$id'";
        //     $user_data = $this->user->con()->query($user_result);
        //     $row = $user_data->fetch_array();
        // }
        $result = $this->user->getData('detail', '*', '', 'id', 'desc');
        return $result;
    }
}
