<?php
require 'connect.inc.php';
include 'header.php';
$query="select * from stories order by id DESC";
$retval=mysql_query($query);
?>
<html>
	<center><body id="bodys">
		<?php
		include 'left.php';
		?>
		<div class="ib" id="middle">
			<?php 
			while($row=mysql_fetch_assoc($retval))
			{
				echo $row['name'].': '.$row['story'].'<br><br><br>'; 
			}
			?>
		</div>
		<?php
		include 'right.php';
		?>
	</body></center>
</html>