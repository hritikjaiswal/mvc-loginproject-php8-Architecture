<?php 

// class validationController{

//     public function test_input($data) {
//         $data = trim($data);
//         $data = stripslashes($data);
//         $data = htmlspecialchars($data);
//         return $data;
//     }
//     public function checkemail($str) {
//         return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
//     }
//     public function validate_mobile($mobile)
//     {
//     return preg_match('/^[0-9]{10}+$/', $mobile);
//     }
//     function registerValidate(){
//         $detail = $this->test_input($_REQUEST['detail']);

//         if (!preg_match ("/^[a-zA-z]*$/", $detail['name'])){
//             $fnameErr = "only alphabet require";
//          }
//         //  if (!preg_match ("/^[a-zA-z]*$/", $lname)){
//         //      $lnameErr = "only alphabet require";
//         //   }
       
//           if(!$this->checkemail($detail['email'])){
//              echo "Invalid email address.";
//           }
//           else{
//              echo "Valid email address.";
//           }

//           if (!$this->validate_mobile($detail['phone'])) {
//              $phoneErr = "Invalid phone format"; 
//          }
         
//          if (strlen($detail['password']) <= 8) {
//              $passErr = "Your Password Must Contain At Least 8 Characters!";
//          }
//          elseif(!preg_match("#[0-9]+#",$detail['password'])) {
//              $passErr = "Your Password Must Contain At Least 1 Number!";
//          }
//          elseif(!preg_match("#[A-Z]+#",$detail['password'])) {
//              $passErr = "Your Password Must Contain At Least 1 Capital Letter!";
//          }
//          elseif(!preg_match("#[a-z]+#",$detail['password'])) {
//              $passErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
//          } else {
//              $cpassErr = "Please Check You've Entered Or Confirmed Your Password!";
//          }

//          if(empty($_REQUEST['detail']['fname']) || empty($_REQUEST['detail']['lname']) || empty($_REQUEST['detail']['email']) || empty($_REQUEST['detail']['phone']) || empty($_REQUEST['detail']['password'])){
//             $_SESSION['status'] = "All field is mandatory!";
//          }
//     }

    
// }
?>