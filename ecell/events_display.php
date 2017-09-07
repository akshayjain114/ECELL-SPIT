<?php
require 'connect.inc.php';
include 'header.php';
$query = "SELECT * FROM `events` order by event_id DESC";
$retval = mysql_query($query);
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
				echo $row['event_name'].': '.$row['description'].'<br><center><img height=100 width=100 src="upload/'.$row['file'].'" alt="" /></center><br><br><br>'; 
			}
			?>
		</div>
		<?php
		include 'right.php';
		?>
	</body></center>
</html>