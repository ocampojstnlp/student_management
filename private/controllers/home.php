<?php  

class Home extends Controller{

    function __construct() {
        
        echo 'This is the home controlller';       

    }

    public function index() {
        return 'Index home';
    }
}