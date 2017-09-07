<?php
require 'connect.inc.php';
include 'header.php';
if(!loggedin()||$_SESSION['admin']!="1")
{
	header("Location: warning_page.php");
}	
else
{
	if(isset($_POST['content'])&&!empty($_POST['content'])&&isset($_POST['date'])&&!empty($_POST['date'])
	&&isset($_POST['names'])&&!empty($_POST['names']))
	{
		$content=mysql_real_escape_string($_POST['content']);
		$date=mysql_real_escape_string($_POST['date']);
		$names=mysql_real_escape_string($_POST['names']);
		if(!empty($content)&&!empty($date)&&!empty($names))
		{
		echo $names;
		$query="insert into announce values('','$names','$content','$date','no')";
		mysql_query($query);
		echo '<script>
		alert("The content is updated. Make another announcement if u wish to! Or go back")
		</script>';
		}
	}
}
?>
<html>
	<center><form action="create_update.php" method="POST">
		Enter the name: <br><input type="text" name="names"><br>
		Enter the update:<br> <textarea cols="50" rows="20" name="content">Fill content here.</textarea><br>
		Enter the date: <br><input type="text" name="date">
		<br><input type="submit" value="Update">
	</form></center>
</html>