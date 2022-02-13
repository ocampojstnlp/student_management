<?php  

class Login extends Controller{

    function __construct() {
        
    }

    public function index($id = '') {
        
       $this->view('login');

    }
}