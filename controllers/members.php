<?php
    Class Members extends Controller{
        function __construct()
        {
            parent::__construct();
        }
        function index(){
        	$this->view->render('views/members/index.php');
        }
        function profile(){
            $this->view->render('views/members/profile.php');
        }
        function addMember(){
            $this->model->addMember();
        }
        function updateProfile(){
            $this->model->updateProfile();
        }
        function deleteProfile(){
            $this->model->deleteProfile();
        }
    }

?>