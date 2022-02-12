<?php  

class Home extends Controller{

    function __construct() {
        
    }

    public function index($id = '') {
        
      echo $this->view('home');

    }
}