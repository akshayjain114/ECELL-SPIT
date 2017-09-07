<?php
include 'header.php';
if(loggedin()&&$_SESSION['admin']=="1")
header("Location: admin.php");
if(isset($_POST['pass_word'])&&!empty($_POST['pass_word']))
{
	$pass_word=$_POST['pass_word'];
	if($pass_word!="akshayjain")
	{
		echo '<script>
		alert ("Please stay out of this!");
		</script>';
	}
	else
	{	
		$_SESSION['admin']="1";
		session_start();
		header("Location: admin.php");
	}
}
?>
<html>
	<center><form action="verify.php" method="POST">
		Enter password: <input type="password" name="pass_word"><br>
		<input type="submit" value="Authenticate">
	</form>
	<p>Keep out if you're not in the e-cell committee!</p>
	</center>
</html>