<?php          
    function autoload_classes($class_name) {
        $filename = FOLDER_CLASSES . SLASH . strtolower($class_name) . '.php';     
        if(file_exists($filename) && is_file($filename)) {
            include $filename;
        }      
    }        
    function autoload_controllers($class_name) {		
        $filename = FOLDER_CONTROLLERS . SLASH . strtolower($class_name) . '.php';
        if(file_exists($filename) && is_file($filename)) {
            include $filename;
        }      
    }
    
    spl_autoload_register('autoload_classes');
    spl_autoload_register('autoload_controllers');
    
    function boot() {       
        $urlInfo = Controller::get_controller_and_method();
        print_r($urlInfo);
        if(class_exists($urlInfo['controller'])) {
			if(get_parent_class($urlInfo['controller']) == "Controller") {                  
				$controller = new $urlInfo['controller'];
				if(method_exists($controller, $urlInfo['method'])) {
					call_user_func(array($controller, $urlInfo['method']));
				} else {
                        
				}
			}
		}     
    }
