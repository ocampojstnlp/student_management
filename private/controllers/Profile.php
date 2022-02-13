<?php  

class Profile extends Controller{

    function __construct() {
        
    }

    public function index($id = '') {
       $this->view('profile');
    }
}