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
	//echo "lkijfoihrfiwejforihwe9ruhfweionrfweouhr0u";
	?>	
	<div id="middle" class="ib">
	<center>Welcome admin<br>We hope S.P.I.T. Ecell is still alive :-)<br></center>
	<center>What would u like to do?</center>
	<center>
	<!--<a id="pad" href="create_event.php?id='.$id.'">Create an event</a>-->
	<?php
	echo '<form action = "create_event.php" method = "POST">
		<input type = "submit" value = "create an event"><br>
		</form>';
		?>
	<a id="pad" href="create_update.php">Make an announcement</a>
	<a id="pad" href="delete_event.php">Delete an event</a>
	<a id="pad" href="create_story.php">Add a story</a>
	</center>
	<br>
	<center>
	<a id="pad" href="choose_updates.php">Choose updates</a>
	<a id="pad" href="choose_events.php">Choose events</a>
	</center>
	</div>
	
	<?php
	include 'right.php';
	?>
	</body></center>
</html>