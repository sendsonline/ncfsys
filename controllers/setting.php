<?php
    Class Setting extends Controller{
        function __construct()
        {
            parent::__construct();
        }
        function index(){
        	$this->view->render('views/setting/index.php');
        }
        function members(){
        	$this->view->render('views/setting/member.php');
        }
        function ministry(){
        	$this->view->render('views/setting/ministry.php');
        }
        function addMinistry(){
        	$this->model->addMinistry();
        }
    }

?>