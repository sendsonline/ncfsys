<?php
class Missions_Model extends Model {
    function __construct(){
        parent:: __construct();
    }

    function addInfo(){
    	$date = $_POST['missionDate'];
        $place = $_POST['missionPlace'];
        $num = 0;

        $TblMission = new Mission();
        $TblMission->missionDate = $date;
        $TblMission->missionPlace = $place;
        $TblMission->missionNum = 0;

        $x = DAOFactory::getMissionDAO()->insert($TblMission);
        if(!empty($x)){
        	echo"<script>alert(".$x.");window.location.href='countAccept?id=".$x."';</script>";
        }
    }
    function numCount(){
    	return DAOFactory::getMissionDAO()->load($_GET['id']);
    }

    function addCount(){
    	$pageId = $_POST['pageId'];
    	$TblMission = new Mission();
    	$TblMission=DAOFactory::getMissionDAO()->load($pageId);
    	// print_r($TblMission);
    	$TblMission->missionNum += 1; 
    	$x = DAOFactory::getMissionDAO()->update($TblMission);
    	echo $TblMission->missionNum;

    }
    function getAllMission(){
        return DAOFactory::getMissionDAO()->queryAll();
    }
    function deleteMission(){
        $id = $_GET['id'];
        $x = DAOFactory::getMissionDAO()->delete($id);

        if(!empty($x)){
            echo"
                <script>alert('Mission Deleted!');window.location.href='".URL."missions';</script>
            ";
        }
    }
    function minusCount(){
        $pageId = $_POST['pageId'];
        $TblMission = new Mission();
        $TblMission=DAOFactory::getMissionDAO()->load($pageId);
        $TblMission->missionNum -= 2;
        $x = DAOFactory::getMissionDAO()->update($TblMission);
        echo $TblMission->missionNum;
    }

}