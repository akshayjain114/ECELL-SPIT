<?php
include 'header.php';
$id=$_SESSION['admin'];
if(!loggedin()||$id!="1")
{
	header("Location: warning_page.php");
}	
?>
<html>
<center><body id="bodys">
	<?php
	include 'left.php';
	?>	
	<div id="middle" class="ib">
	<center>Welcome admin<br>We hope S.P.I.T. Ecell is still alive :-)<br></center>
	<center>What would u like to do?</center>
	<center>
	<a id="pad" href="create_event.php">Create an event</a>
	<a id="pad" href="create_update.php">Make an announcement</a>
	<a id="pad" href="delete_event.php">Delete an event</a>
	<a id="pad" href="create_story.php">Add a story</a>
	</center>
	<br>
	<center>
	<a id="pad" href="choose_updates.php">Choose updates</a>
	<a id="pad" href="#">Choose events</a>
	<a id="pad" href="choose_stories.php">Choose stories</a>
	</center>
	</div>
	
	<?php
	include 'right.php';
	?>
	</body></center>
</html>