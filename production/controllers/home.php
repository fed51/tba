<?php
    class Home extends Controller {
        
        function __construct() {
            parent::__construct();
            echo "<br />(Home) Home::construct";   
        }        
        public function index() {
            echo "<br />(Home) Home::index";
            $this->load->view("testLayout");
        }

        public function bob() {
        	//echo "<br />(Home) Home::BOB";
        	Logger::Log("BOB", 0, "Home");
            $this->load->view("testLayout2");
            
            $db = new Database();
            $db->select(array('uid', 'username'), 'user', 'uid = 2', 5);
        }
    }