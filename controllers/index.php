<?php

Class Index extends Controller{
    function __construct()
    {
        parent::__construct();
    }
    function index(){
    	$this->view->render('views/index/index.php');
    }
    function logout(){
        Session::destroy();
        header('Location:'.URL.'');
    }

}