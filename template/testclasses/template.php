<?php
/**
 * @name        Test Template Class
 * @author      Charlie Baker
 * @copyright   2010
 */
class Templater {
	public static function Navigation($items) {
		if($items != null) {
			if(is_array($items)) {
				$output = "<ul>"; 
				$count = count($items);
				for($i = 0; $i < $count; $i++) {
					$output .= "<li>" . $items[$i] . "</li>";
				}
				$output .= "</ul>";
                return $output;
            }
        }
        return null;
    } 
}
?>
