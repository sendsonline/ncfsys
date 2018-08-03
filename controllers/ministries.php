<?php
    Class Ministries extends Controller{
        function __construct()
        {
            parent::__construct();
        }
        function index(){
        	$this->view->render('views/ministries/index.php');
        }
        function profile(){
        	$this->view->render('views/ministries/profile.php');
        }
        
    }

?>