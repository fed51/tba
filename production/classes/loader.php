<?php
    class Loader {          	public $load;    	
        function __construct() {
            Logger::Log("construct", -1, "Loader");            $this->load = &$this;
        }       
        public function view($url) {            Logger::Log("Load View: " . $url, -1, "Loader");            Logger::Log("Checking if <strong>$url</strong> exists...", -1, "Loader");                        $filename = FOLDER_LAYOUT . SLASH . $url . '.php';            Logger::Log("Filename: " . $filename, -1, "Loader");                        if(file_exists($filename)) {            	Logger::Log("File exists.", -1, "Loader");            	include($filename);            } else {            	Logger::Log("File doesn't exist. Aborting load.", -1, "Loader");            }
        }     
    }