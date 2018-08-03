<?php
    ini_set('max_execution_time', 300);



    // libs
    require 'libs/Server.Class.php';
    require 'libs/Session.Class.php';
    
    //autoloader 
    require 'libs/Bootstrap.Class.php';
    require 'libs/Controller.Class.php';
    require 'libs/Model.Class.php';
    require 'libs/Views.Class.php';
    include 'include_dao.php';
    
    
    // include 'amember_api.php';
    $app = new Bootstrap();
    exit;
