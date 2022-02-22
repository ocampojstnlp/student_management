<?php  

class Home extends Controller{

    function __construct() {
        
    }

    public function index($id = '') {
        // $user = $this->load_model('user');
        $user = new User();

        $arr['firstname'] = 'Tester firstname';
        $arr['lastname'] = 'SameTest1';
        $arr['date'] = '0000-00-00 00:00:00';
        $arr['user_id'] = '1asdasd';
        $arr['gender'] = 'male';
        $arr['school_id'] = '1234';
        $arr['rank'] = 'student';

        $user->insert($arr);

        $data = $user->findAll();
        // $data = $user->where('lastname', 'Zein');
        $this->view('home', ['rows' => $data]);

    }
}