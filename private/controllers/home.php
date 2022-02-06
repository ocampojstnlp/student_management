<?php  

class Home extends Controller{

    function __construct() {
        
        echo 'This is the home controlller <br>';       

    }

    public function index($id = '') {
        return $id;
    }
}