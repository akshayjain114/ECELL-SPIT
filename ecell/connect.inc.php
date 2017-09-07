<?php
$host = 'localhost';
$username = 'root';
$password = '';
$error = 'Could not connect';
$db = 'ecell_db';

if (!@mysql_connect($host, $username, $password) || !@mysql_select_db($db))
{
	die($error);
}
else
{	
}

?>