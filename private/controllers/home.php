<?php  

class Home extends Controller{

    function __construct() {
        
    }

    public function index($id = '') {
        
       $this->view('home');

    }
}