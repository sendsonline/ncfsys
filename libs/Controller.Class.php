<?php
class Controller{
    function __construct(){
        $this->view = new Views();
    }
    public function loadModel($name){
        $path = 'model/' .$name . '_model.php';
//        print_r($path);

        if(file_exists($path)){
            require $path;

            $modelName = $name . '_Model';

            $this->model = new $modelName();
        }
    }


}