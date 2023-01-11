<?php 
namespace controllers;
class registerController{

    public $register_data;
    function __construct(){
        @include('/Applications/XAMPP/xamppfiles/htdocs/mvc_loginproject/model/register.php');
        $this->register_data = new \registerModel;
    }

    public function reg(){

        $_REQUEST['detail']['user_type'] = 'user';
        $pass = $_REQUEST['detail']['password'];
        $pass1 = md5($pass);
        $_REQUEST['detail']['password'] = $pass1;
        $table = $_REQUEST['detail'];

        foreach ($table as $key => $val) {
            $fieldArr[] = $key;
            $valueArr[] = $val;
        }
        $field = implode(", ", $fieldArr);
        $value = implode("', '", $valueArr);
        $value = "'" . $value . "'";
        $sql = "insert into detail($field) values($value);";
        $res = $this->register_data->con()->query($sql);

        header('location: /mvc_loginproject/index.php?function=login');
        
        // $conn = $this->register_data->con;
        // if( $conn->query($sql) == TRUE){
        //     // $last_id =  $conn->insert_id;
        //     //    $this->insertImage($last_id);
        // }
        // $conn->close();

    }

}
$detail = new registerController;
$detail->reg();


 ?>