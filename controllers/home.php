<?php
class Home extends Controller{
    function __construct(){
        parent::__construct();
    }
    public function index()
    {
        $this->view->render('views/home/index.php');
    }
    function admin_login()
    {
        $this->model->admin_login();
    }

}
