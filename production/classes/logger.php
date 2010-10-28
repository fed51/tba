<?php 

	class Logger {
		
		static function Log($message, $level = -1, $sender = '') {
			
			if(!LOGGING) { return; }
			
			echo "<br />";
			
			switch($level) {
				case 0:
					echo "Notice: ";
					break;
			}
			
			if(strlen($sender) > 0) {
				echo " (" . $sender . ") ";
			}
			
			echo $message;
		}
		
	}