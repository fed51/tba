<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />
<title><?php echo "Title"; ?></title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" href="css/smoothness/jquery-ui-1.8.5.custom.css">

<?php
	if (is_firefox()) { 
echo(" 
<link rel=stylesheet type=text/css href=css/ff.css />
");
}
if (is_safari()) { 
echo(" 
<link rel=stylesheet type=text/css href=css/webkit.css />
");
} 
if (ae_detect_ie()) { 
echo("
<link rel=stylesheet type=text/css href=css/ie.css />
");
} 
?>

<script src="js/jquery-1.4.3.min.js" type="text/javascript"></script>
<script src="js/jquery-ui-1.8.5.custom.min.js" type="text/javascript"></script>
		
		<!--script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script-->
		<script src="js/keyCodeMatcher.js" type="text/javascript"></script>
		<script src="js/main.js" type="text/javascript"></script>

	<script>
	$(function() {
		$( "button, input:submit, a", "#login, .search" ).button();
		$( "a", "#login").click(function() { return false; });
	});
	</script>
		
</head>

<body>
<div class="header">
<div class="head_wrap">
<div class="title">
title
</div>
<div class="login" id="login">
<form class="login" action="">
<input class="login" type="text" name="username" value="Username" onFocus="if(this.value=='Username')this.value='';" onBlur="if(this.value=='')this.value='Username';" />
<input class="login" type="password" name="password" id="password" value="password" onFocus="if(this.value=='password')this.value='';" onBlur="if(this.value=='')this.value='password';" />
<input class="login" id="login" type="submit" name="submit" value="login" />
</form>
</div>
</div>
</div>
<div class="wrapper">
<div class="wrapper2">


<div class="container">