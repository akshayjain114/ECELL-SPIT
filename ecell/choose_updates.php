<?php
require 'connect.inc.php';
include 'header.php';
if(!loggedin()||$_SESSION['admin']!="1")
{
	header("Location: warning_page.php");
}	
$query="select * from announce order by id DESC";
$query_run=mysql_query($query);
?>
<html>
	<center><body id="bodys">
		<?php include 'left.php';?>
		<div id="middle" class="ib">
			<form action="update_updates.php" method="post"><center>
				<?php
				while($row=mysql_fetch_assoc($query_run))
				{
					echo $row['name'];
					if($row['display']=='yes')
					$checked="checked";
					else
					$checked='';
					$id=$row['id'];
					echo '<input type="checkbox" '.$checked.' name='.$id.'>';
					echo '<br>';
				}?>
				<input type="submit" value="Update"><br>
			</center></form>
		</div>
		<?php include 'right.php';?>
	</body></center>
</html>

