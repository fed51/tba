<?php
    class Home extends Controller {
        
        function __construct() {
            parent::__construct();
            Logger::Log("Home::construct", -1, "Home");   
        }        
        public function index() {
            Logger::Log("Home::index", -1, "Home");
            $this->load->view("testLayout");
        }

        public function bob() {
        	//echo "<br />(Home) Home::BOB";
        	Logger::Log("BOB", 0, "Home");
            $this->load->view("folder/bob");
            
            $db = new Database();
            $db->select(array('uid', 'username'), 'user', 'uid = 2', 5);
        }
        
        public function testLayout() {
        	$this->load->view("folder/main");
        }
    }