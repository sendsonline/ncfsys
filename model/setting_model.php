<?php
class Setting_Model extends Model {
    function __construct(){
        parent:: __construct();
    }

    function addMinistry(){
    	$min_name = $_POST['min_name'];
    	$min_desc = $_POST['min_desc'];
    	$min_add = $_POST['min_add'];

    	$ministry = new Ministrie();
    	$ministry->ministryName = $min_name;
    	$ministry->ministryDesc = $min_desc;
    	$ministry->ministryAddress = $min_add;
 
    	$id = DAOFactory::getMinistriesDAO()->insert($ministry);
    	if(!empty($id)){
    		echo "<script>alert('Ministry Added');window.location.href='ministries/';</script>";
    	}
    	else{
    		echo "<script>alert('Adding failed');window.location.href='ministry';</script>";

    	}
    }

}