<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= (isset($this->title)) ? $this->title : 'New Creature Fellowship';?></title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!--CSS-->
    <link rel="stylesheet" href="<?= URL?>public/css/bootstrap.css" >
    <link rel="stylesheet" href="<?= URL?>public/css/main.css" >
    <link rel="stylesheet" href="<?= URL?>public/css/style.css" >
    <link rel="stylesheet" href="<?= URL?>public/css/custom.css" >
    <script type="text/javascript" src="<?php echo URL?>public/js/jquery-3.2.1.min.js"></script>
    <script src="<?= URL ?>public/js/tether.js"></script>
    <script src="<?= URL ?>public/js/jquery-ui.js"></script>

   <?php 
        $user = Session::getSession('user'); 
        $links = isset($_GET['url']) ? $_GET['url'] : null;

        $arrayLinks = explode('/', trim($links, '/'));

        $classs = strtolower(isset($arrayLinks[0]) && $arrayLinks[0] != ''  ? $arrayLinks[0] : 'index');
        $functions = isset($arrayLinks[1]) ? $arrayLinks[1] : 'index';


    ?>
</head>
<body>


<div class="outer-wrapper" id="outer-wrapper">
    <nav class="navbar navbar-default navbar-fixed-top navbar-bg">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= URL ?>"><img src="<?= URL ?>public/images/ncflogo.png" class="navbar-brand-image"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    
                </ul>



                <?php  if(!empty(Session::getSession('user'))){ ?>


                    <ul class="nav navbar-nav navbar-right">
                        <li class="<?= $classs=='index' ? 'activeLink' : '' ?>"><a href="<?= URL ?>" class="navbar-a text-bold">&nbspHome<span class="sr-only">(current)</span></a></li>
                        <li class="<?= $classs=='members' ? 'activeLink' : '' ?>"><a href="<?= URL ?>members">&nbspNCF Members</a></li>
                        <li class="<?= $classs=='ministries' ? 'activeLink' : '' ?>"><a  href="<?= URL ?>ministries">&nbspNCF Ministries</a></li>
                        <li class="<?= $classs=='missions' ? 'activeLink' : '' ?>"><a  href="<?= URL ?>missions">&nbspNCF Mission</a></li>
                        <!-- <li class="<?= $functions=='about' ? 'activeLink' : '' ?>"><a  href="<?= URL ?>about">&nbspAbout</a></li> -->
                        <li class="dropdown">
                            <a class="dropdown-toggle text-bold" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">&nbsp&nbspSettings<span class="caret"></span></a>
                            <ul class="dropdown-menu" id="drop">
                                <li><a href="<?= URL ?>setting/members">Members Settings</a></li>
                                <li><a href="<?= URL ?>setting/ministry">Ministry Settings</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle text-bold" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">&nbsp&nbsp<?= $user['username'] ?><span class="caret"></span></a>
                            <ul class="dropdown-menu" id="drop">
                                <li><a href="<?= URL ?>index/logout">Logout</a></li>
                                <li><a href="<?= URL ?>setting">Account Settings</a></li>
                            </ul>
                        </li>
                    </ul>


                 <?php } ?>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
