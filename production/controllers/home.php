<?php
    class Home extends Controller {
        
        function __construct() {
            parent::__construct();
            echo "<br />(Home) Home::construct";   
        }        
        public function index() {
            echo "<br />(Home) Home::index";
            $this->load->view("bob");
        }       
    }