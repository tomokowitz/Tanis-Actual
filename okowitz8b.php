<html>
 
<head>
Have a php file named <lastname>8b.php that will insert this data into the BASEBALL table.
 
<title>Untitled 1</title>
</head>

<body>


<?php
	$teamID=$_POST['teamID'];
  $teamName=$_POST["teamName"];
  $teamCity=$_POST["teamCity"];
 if ( empty($teamID)) die("<P>No team ID entered");

$DBConnect = mysql_connect("localhost", "okowitzt970", "");
	if (! $DBConnect)
	{
  		echo "<P>Database not available";
	}
	mysql_select_db("okowitzt970");
	$SQLstring = "INSERT INTO BASEBALL VALUES(" .
              $teamID . ",'" . $teamName . "','" . $teamCity . $todayDate . "');";
	// echo $SQLstring;
	$QueryResult = mysql_query($SQLstring);


?>

</body>

</html>
