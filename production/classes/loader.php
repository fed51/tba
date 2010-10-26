<?php

    class Loader {
        
        function __construct() {
            echo "<br />(Loader) Loader::construct)";
        }
        
        public function view($url) {
            echo "<br />(Loader) Loader::view - Load View: " . $url;
        }
        
    }