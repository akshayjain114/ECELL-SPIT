<?php
	require 'connect.inc.php';
	$query="select * from events order by event_id DESC";
	$query_run=mysql_query($query);
?>
<html>
	<div id="right" class="ib">
		<marquee bgcolor="black" behavior="scroll" direction="up" scrolldelay=300 onMouseOver=this.stop()
		onMouseOut=this.start()>
		<?php
			while($query_row=mysql_fetch_assoc($query_run))
			{
				if($query_row['display']=="yes")
				echo $query_row['event_name'].': '.$query_row['description'].'<br><br>';
			}
		?>
		</marquee>
	</div>
</html>