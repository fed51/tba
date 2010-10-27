<?php
    class Loader {          	public $load;    	
        function __construct() {
            echo "<br />(Loader) Loader::construct)";            $this->load = &$this;
        }       
        public function view($url) {            Logger::Log("(Loader) Loader::view - Load View: " . $url);            Logger::Log("(Loader) Checking if <strong>$url</strong> exists...");                        $filename = FOLDER_LAYOUT . SLASH . $url . '.php';            Logger::Log("(Loader) Filename: " . $filename);                        if(file_exists($filename)) {            	Logger::Log("(Loader) File exists.");            	include($filename);            } else {            	Logger::Log("(Loader) File doesn't exist. Aborting load.");            }
        }     
    }