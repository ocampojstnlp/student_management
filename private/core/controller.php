<?php

class Controller {

    function __construct() {
        // echo 'Controller';
    }

    public function view($view, $data = array()) {

        extract($data);
        
        if (file_exists('../private/views/' . $view . '.view.php')) {
           #return  file_get_contents('../private/views/' . $view . '.view.php');

            ob_start();
                include('../private/views/' . $view . '.view.php');
                $output = ob_get_contents();
            ob_end_clean();
        
            return $output;

        } else {
            return file_get_contents('../private/views/' . '404' . '.view.php');
        }
    }

}