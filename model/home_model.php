<?php
class Home_Model extends Model {
    function __construct(){
        parent:: __construct();
    }

    function admin_login()
    {
        $uname = $_POST['username'];
        $password = $_POST['password'];

        $admin = DAOFactory::getAdminDAO()->queryByUsernameAndPassword($uname,$password);
        // print_r($admin);
        
        if(empty($admin)){
        	echo "<script>alert();window.location.href='".URL."';</script>";
        }
        else{
        	$user = array();

        	foreach ($admin as $admin_info) {
        		$user = $admin_info;
        	}
       		Session::setSession('user',$user);
       		echo "<script>alert();window.location.href='".URL."';</script>";
        }
        

    }


}