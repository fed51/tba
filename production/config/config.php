<?php
    /**
     * @name Config - Local
     * 
     * This file contains all the configuration information that needs to be
     * globally accessable and will not change.
     **/     
     /** DATABASE CONSTANTS **/
     //define('DATABASE_HOST', 'qdbphpprj.db.5509031.hostedresource.com');     define('DATABASE_HOST', 'localhost');
     define('DATABASE_USER', 'qdbphpprj');
     define('DATABASE_PASS', 'Phpprj1');
     define('DATABASE_DB', 'qdbphpprj');
         
     /** URL */
     //define('BASE_URL', 'http://qdb.cj-baker.co.uk/production/');   // The base url (with trailing slash)     define('BASE_URL', 'http://localhost/Test/production/');
     define('DEFAULT_CONTROLLER', 'home');
     
     define('FOLDER_CLASSES', 'classes');
     define('FOLDER_CONTROLLERS', 'controllers');
     define('FOLDER_LAYOUT', 'layout');
     
     define('BOOTSTRAPPER', 'bootstrapper.php');   
     /** SITE SPECIFIC */
     define('SITE_NAME', 'Quotes Database');          define('SLASH', '/');
?>