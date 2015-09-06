<?php
/*
**
**	Portfolio PHP OOP MVC
**	/index.php
**  
*/
error_reporting( E_ALL );
ini_set( "display_errors", 1 );

// Store all page data in stdclass..
$pageData = new stdClass();
$pageData->title = "Portfolio PHP OOP MVC";
$pageData->content = include_once "views/navigation.php";
/*
**	URL variables - $_GET ( a Superglobal array )
**	- access the value named page using
**	$_GET['page'] - when user clicks NAV item.
*/
$navClicked = isset($_GET['page']);
if ( $navClicked ) {
	$fileLoad = $_GET['page'];
	$pageData->content .=include_once "views/$fileLoad.php";
}
// HTML page view
$page = include_once "templates/page.php";
echo $page;