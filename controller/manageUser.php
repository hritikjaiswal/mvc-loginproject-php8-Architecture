<?php
// @include('/Applications/XAMPP/xamppfiles/htdocs/mvc_loginproject/controller/user.php');
if(isset($_SESSION['id']) && !empty($_SESSION['id'])){
    if(!isset($_SERVER['HTTP_REFERER'])){
        // redirect them to your desired location
        header('location: /mvc_loginproject/index.php?function=user');
        exit;
      }
}else{
    if(!isset($_SERVER['HTTP_REFERER'])){
        // redirect them to your desired location
        header('location: /mvc_loginproject/index.php?function=login');
        exit;
      }
}

$manageUser = new user;
        $fname = '';
        $email = '';
        $mobile = '';
        $gender = '';
        $id = '';
        //update data
        if (isset($_GET['id']) && $_GET['id'] != '') {
            $id = $manageUser->get_safe_str($_GET['id']);
            $condition_arr = array('id' => $id);
            $result = $manageUser->getData('detail', '*', $condition_arr);
            $fname = $result['0']['fname'];
            //
            $email = $result['0']['email'];
            $mobile = $result['0']['phone'];
            $gender = $result['0']['gender'];
            // $user_type = $result['0']['user_type'];
            // $image = $result['0']['file_upload'];
        }
        if (isset($_POST['submit'])) {
            $id = $manageUser->get_safe_str($_GET['id']);
            $fname = $manageUser->get_safe_str($_POST['fname']);
            $email = $manageUser->get_safe_str($_POST['email']);
            $mobile = $manageUser->get_safe_str($_POST['phone']);
            $gender = $manageUser->get_safe_str($_POST['gender']);
            // $user_type = $this->manageUser->get_safe_str($_POST['user_type']);
            // $image = $this->user->get_safe_str($_POST['file_upload']);
            $condition_arr = array('fname' => $fname, 'email' => $email, 'phone' => $mobile,  'gender' => $gender);
            
            if ($id == '') {
                $manageUser->insertData('detail', $condition_arr);
            } else {
                $manageUser->updateData('detail', $condition_arr, 'id', $id);
            }
            header('location: /mvc_loginproject/index.php?function=user');
    }
// }
// }

?>