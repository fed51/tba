<?php

function is_firefox()
{
    if (isset($_SERVER['HTTP_USER_AGENT']) && 
    (strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') !== false))
        /*return true;*/
		echo("
			<link rel=\"stylesheet\" type=\"text/css\" href=\"css/ff.css\" />
		");
    else
        return false;
}

function is_safari()
{
    if (isset($_SERVER['HTTP_USER_AGENT']) && 
    (strpos($_SERVER['HTTP_USER_AGENT'], 'Safari') !== false))
		echo(" 
			<link rel=\"stylesheet\" type=\"text/css\" href=\"css/webkit.css\" />
		");
    else
        return false;
}

function is_ie()
{
    if (isset($_SERVER['HTTP_USER_AGENT']) && 
    (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false))
		echo(" 
			<link rel=\"stylesheet\" type=\"text/css\" href=\"css/ie.css\" />
		");
    else
        return false;
}

?>