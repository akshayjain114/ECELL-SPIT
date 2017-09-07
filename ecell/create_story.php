<?php
require 'connect.inc.php';
include 'header.php';
if(!loggedin()||$_SESSION['admin']!="1")
{
	header("Location: warning_page.php");
}	
else
{
	if(isset($_POST['story'])&&!empty($_POST['story'])&&isset($_POST['name'])&&!empty($_POST['name']))
	{
		$story=mysql_real_escape_string($_POST['story']);
		$name=mysql_real_escape_string($_POST['name']);
		if(!empty($story)&&!empty($name))
		{
		$query="insert into stories values ('','$name','$story')";
		mysql_query($query);
		echo '<script>
		alert("The story is added. Add another announcement if u wish to! Or go back")
		</script>';
		}
	}
}
?>
<html>
	<center><form action="create_story.php" method="POST">
		Enter the story:<br> <textarea cols="50" rows="20" name="story">Fill story here.</textarea><br>
		Enter the name: <br><input type="text" name="name">
		<br><input type="submit" value="Add">
	</form></center>
</html>