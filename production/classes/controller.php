<?php
    class Controller {      
        private $url;
        private $controller;
        protected $load;
        private $method;      
        function __construct() {         
            $this->url = $this->get_url();         
            $urlInfo = Controller::get_controller_and_method();
            $this->controller = $urlInfo['controller'];
            $this->method = $urlInfo['method'];                                 	$this->load = new Loader();
        }       
        public static function get_url() {            
            return str_replace(BASE_URL, '', 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']);
        }       
        public static function get_controller_and_method() {
            $urlInfo = array();
            $tmpUrl = str_replace('index.php?', '', Controller::get_url());
            $tmpUrl = explode('/', $tmpUrl);                      
            if($tmpUrl[0] == 'index.php' || strlen($tmpUrl[0]) == 0) { 
                $urlInfo['controller'] = DEFAULT_CONTROLLER;    
            } else {
                $urlInfo['controller'] = $tmpUrl[0];
            }           
            if(!array_key_exists(1, $tmpUrl)) {
                $urlInfo['method'] = "index";
            } else {
                $urlInfo['method'] = $tmpUrl[1];
            }          
            return $urlInfo;
        }               
    }