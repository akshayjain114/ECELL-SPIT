<?php
require 'core.inc.php';
require 'connect.inc.php';
if(loggedin())
{
	$vis=true;
}
else
{
	$vis=false;
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Entrepreneurship Cell</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript">
	function start()
	{
		var s=document.getElementById("starts");
		if(<?php echo $vis?>)
		{
			s.innerHTML="Click here to log out!";
			s.href="logout.php"
			s.style.fontSize="25px";
		}
	}
</script>
</head>
<!-- start header -->
<body onload="start()">
<div id="header">
	<div id="logo">
		<center><h1><a href="#">Entrepreneurship Cell-S.P.I.T.</a></h1></center>
	</div>
	
	<div id="menu">
		<ul>
			<li class="active"><a href="index.php" accesskey="1" title="">Home</a></li>
			<li><a href="updates.php" accesskey="2" title="">Updates</a></li>
			<li><a href="#" accesskey="3" title="">Events</a></li>
			<li><a href="team.php" accesskey="4" title="">Team</a></li>
			<li><a href="verify.php" accesskey="5" title="">Admin</a></li>
			<li><a href="suc_stories.php" accesskey="6" title="">Success stories</a></li>
		</ul>
	</div>
</div>
<center>
		<a id="starts" href="#"><span style="font-size: 25px">It's all about leaving your job!</span></a><br><br>
</center>
</body>
<!-- end header -->
</html>
