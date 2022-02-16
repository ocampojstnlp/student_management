<?php  

class Home extends Controller{

    function __construct() {
        
    }

    public function index($id = '') {
        // $db = new Database();
        // $data = $db->query('SELECT * FROM users WHERE firstname = ?;', ['john']);    

        // $db = new Database();

        // $data = $db->query('SELECT * FROM users WHERE firstname = ?;', ['john']);


        $db = new Database();
        $data = $db->query('SELECT * FROM users WHERE firstname = ?', ['jane']);


        // foreach($datas as $data) {
        //     echo $data->firstname .' ' . $data->lastname . '<br>';
        // }

        $this->view('home', ['rows' => $data]);

    }
}