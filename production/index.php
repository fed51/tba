<?php
	error_reporting(E_ALL);    

    // Load our configuration.    
    include('config/config.php');
    
    // Get and run our bootstrapper.
    include(FOLDER_CLASSES . SLASH . BOOTSTRAPPER);
    
    //$bob = new Database();
    //$bob->select(array('uid', 'username', 'password'), 'bob');
    //$bob->select('uid, username, password', 'user');
    //$bob->select('*', 'user');
    
    // Self loading controller depending on the URL.
    boot();