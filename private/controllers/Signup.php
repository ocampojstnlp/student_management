<?php  

class Signup extends Controller{

    function __construct() {
        
    }

    public function index($id = '') {
        
       $this->view('signup');

    }
}