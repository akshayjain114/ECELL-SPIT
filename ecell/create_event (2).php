<?php
//require 'connect.inc.php';
include 'header.php';
if(!loggedin()||$_SESSION['admin']!="1")
{
	header("Location: warning_page.php");
}	

if(isset($_POST['event_name'])&&isset($_POST['description'])&&isset($_POST['year']))
{
$event_name = $_POST['event_name'];
$description = $_POST['description'];
$year = $_POST['year'];

if(isset($_FILES["file"])){
if ($_FILES["file"]["error"] > 0)
    {
	echo "no!";
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

    
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
      }
	  
    }
	}
 $image = $_FILES["file"]["name"];
 $query = "INSERT INTO `events` VALUES ('','$event_name','$description','$year','$image','yes')";
 mysql_query($query);
 $query1 = "SELECT * FROM `events` WHERE `event_name` = '$event_name' AND `year` = '$year'";
 //$retval = mysql_query($query1);
 //$row = mysql_fetch_assoc($retval);
 //echo "yayayayay";
}
?>
<html>
<center>
<body>
<center><form action = "create_event.php?" method = "POST" enctype="multipart/form-data">
<pre>
Name of the event        : <input type = "text" name = "event_name" >
Description of the event : <textarea name = "description"></textarea>
Year			 : <input type = "number" name = "year">
<label for = "file">photos  </label>         : <input type = "file" name = "file" id = "file">
<input type = "submit" name = "add_event" value = "add event">
</pre>
</form></center>
</body>
</center>
</html>