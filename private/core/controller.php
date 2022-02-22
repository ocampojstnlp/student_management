<?php

class Controller {

    function __construct() {
        // echo 'Controller';
    }

    public function view($view, $data = array()) {

        extract($data);
        
        if (file_exists('../private/views/' . $view . '.view.php')) {
           require '../private/views/' . $view . '.view.php';
        } else {
            require '../private/views/' . '404' . '.view.php';
        }

    }

    public function load_model($model) {
        $model = ucfirst($model);
        if (file_exists('../private/models/'. $model .'.php')) {
            require '../private/models/'. $model . '.php';
            return new $model();
        }
        return false;
    }

}