<?php
 
class App {

    protected $controller = 'home';
    protected $method = 'index';
    protected $params = array();

    function __construct() {
        // echo $this->getURL();]
        
        
        $URL = $this->getURL();

        if (file_exists("../private/controllers/" . $URL[0] . '.php')) {
            $this->controller = $URL[0];
        }
        
        require '../private/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller();

    }

    private function getURL() {
        echo '<pre>';

        $url = isset($_GET['url']) ? $_GET['url'] : 'home' ;
        
        // print_r(explode('/', filter_var(trim($url, '/'), FILTER_SANITIZE_URL)));
        
        return explode('/', filter_var(trim($url, '/'), FILTER_SANITIZE_URL));
        
    }

}   