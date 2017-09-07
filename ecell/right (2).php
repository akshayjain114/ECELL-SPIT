<?php
	require 'connect.inc.php';
	$query="select * from announce order by id DESC";
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
				echo $query_row['content'].'<br><br>';
			}
		?>
		</marquee>
	</div>
</html>