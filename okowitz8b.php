<html>
 
<head>
 
<title>Add a Baseball Team</title>
</head>

<body>

<?php
	$teamID=$_POST["teamID"];
  $teamName=$_POST["teamName"];
  $teamCity=$_POST["teamCity"];
 if ( empty($teamID)) die("<P>No team ID entered");
<<<<<<< HEAD
  if ( empty($teamName)) die("<P>No team Name entered");
 if ( empty($teamCity)) die("<P>No team City entered");
=======

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


>>>>>>> origin/master
?>

</body>

</html>
