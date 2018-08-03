<?php
class Views{
    function __construct(){

    }
    public function render($link, $hasHeader = false){
        if($hasHeader == true){
            require $link;
        }else{
            require 'views/header.php';
            require $link;
            require 'views/footer.php';
        }

    }
    public function rendermail($link, $hasHeader = false){
        if($hasHeader == true){
            require $link;
        }else{
            require 'views/header.php';
            require 'PHPMailer/PHPMailerAutoload.php';
            require $link;
            require 'views/footer.php';
        }

    }
}