<?php
require 'connect.inc.php';
include 'header.php';
if(!loggedin()||$_SESSION['admin']!="1")
{
	header("Location: warning_page.php");
}	
else
{
	$query="update events set display='no'";
	mysql_query($query);
	$ids=array_keys($_POST);
	for($i=0;$i<sizeOf($ids);$i++)
	{
		if(isset($_POST[$ids[$i]]))
		{
			$query="update events set display='yes' where event_id=$ids[$i]";
			mysql_query($query);
		}
	}
	echo '<script>
			alert("Updates shall be reflected!")
			document.location="admin.php";
			</script>';
}
?>