<?php
    Class Missions extends Controller{
        function __construct()
        {
            parent::__construct();
        }
        function index(){
            $this->view->allMission = $this->model->getAllMission();
        	$this->view->render('views/mission/index.php');
        }
        function addInfo(){
            $this->model->addInfo();
        }
        function countAccept(){
            $this->view->counts = $this->model->numCount();
            $this->view->render('views/mission/countAccept.php');
        }
        function addCount(){
           $this->model->addCount();
        }
        function minusCount(){
            $this->model->minusCount();
        }
        function addMission(){
            $this->view->render('views/mission/addMission.php');
        }
        function deleteMission(){
            $this->model->deleteMission();
        }

    }

?>