<?php
ob_start();
session_start();
$current_file = $_SERVER['SCRIPT_NAME'];
//echo $current_file;
//$http_referer = $_SERVER['HTTP_REFERER'];

function loggedin()
{
	if (isset($_SESSION['admin']) && !empty($_SESSION['admin']))
	{
		return true;
	}
	else
	{
		return false;
	}
}

?>