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
  if ( empty($teamName)) die("<P>No team Name entered");
 if ( empty($teamCity)) die("<P>No team City entered");
?>

</body>

</html>
