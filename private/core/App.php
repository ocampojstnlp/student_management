<?php
 
class App {

    protected $controller = 'home';
    protected $method = 'index';
    protected $params = array();

    function __construct() {
        // echo $this->getURL();]
        
        
        $URL = $this->getURL();

        // Checks if the file exists
        if (file_exists("../private/controllers/" . $URL[0] . '.php')) {
            $this->controller = ucfirst($URL[0]);
            unset($URL[0]);
        }
        
        require '../private/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller();

        // Checks if method is existing
        if (isset($URL[1])) {

            if (method_exists($this->controller, $URL[1])) {

                $this->method = ucfirst($URL[1]);

                unset($URL[1]);
               
            }
            
        }

        #print_r($URL);

        $URL = array_values($URL);

        $this->params = $URL;

        echo call_user_func_array([$this->controller, $this->method], $this->params);


    }

    private function getURL() {

        $url = isset($_GET['url']) ? $_GET['url'] : 'home' ;
        
        // print_r(explode('/', filter_var(trim($url, '/'), FILTER_SANITIZE_URL)));
        
        return explode('/', filter_var(trim($url, '/'), FILTER_SANITIZE_URL));
        
    }

}   