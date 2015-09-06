<?php
/*
**
**	Portfolio PHP OOP MVC
**	/templates/page.php
**  
*/
return "<!DOCTYPE html>
<html>
	<head>
		<title>$pageData->title</title>
		$pageData->css	
		$pageData->embeddedStyle
	</head>
	<header>
	</header>
	<body>
		<div id='wrapper'>
			$pageData->content
		</div>	
	</body>
	<footer>
	</footer>
</html>"; 
