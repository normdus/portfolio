<?php
/*
**
**	Portfolio PHP OOP MVC
**	/index.php
**  
*/
error_reporting( E_ALL );
ini_set( "display_errors", 1 );

include_once "classes/Page_Data.class.php";
// Store all page data in stdclass..
$pageData = new Page_Data();
$pageData->title = "Portfolio - Your Name";
$pageData->content = include_once "views/navigation.php";
$pageData->css = "<link href='css/styles.css' rel='stylesheet />";

/*
**	URL variables - $_GET ( a Superglobal array )
**	- access the value named page using
**	$_GET['page'] - when user clicks NAV item.
*/
$navClicked = isset($_GET['page']);
if ( $navClicked ) {
	$fileLoad = $_GET['page'];
} else {
	$fileLoad = "skills";	// initial default page load
}

$pageData->content .= include_once "views/$fileLoad.php";

$pageData->embeddedStyle = "
<style>
nav a[href *= '?page=$fileLoad']{
	padding:3px;
	background-color:white;
	border-top-left-radius:3px;
	border-top-right-radius:3px;
}
</style>";

$page = include_once "templates/page.php";
echo $page;