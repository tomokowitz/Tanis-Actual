<html>
Have a php file named <lastname>8a.php that will display the contents of the BASEBALL table.
 
<head>
<title>Untitled 1</title>
</head>

<body>


<?php
   $DBConnect = mysql_connect("localhost", "okowitzt970", "");
	if (! $DBConnect)
	{
  		echo "<P>Database not available";
	}
	mysql_select_db("okowitzt970");
	$SQLstring = "SELECT TEAM_ID, TEAM_NAME, TEAM_CITY FROM BASEBALL;";
	$QueryResult = mysql_query($SQLstring)
	     Or die("<P>Unable to execute the query</P>" .
	          "<P>Error code " . mysql_errno($DBConnect) .
	            " : " . mysql_error($DBConnect) . "</P>");
	$num_rows = mysql_num_rows($QueryResult);
	echo "<P>$num_rows users and passwords</P>";
	mysql_close($DBConnect);
?>
	
	<TABLE BORDER="2">
<TR><TH>Team ID</TH><TH>Team Name</TH><TH>Team Hometown</TH></TR>
<?php
$Row = mysql_fetch_row($QueryResult);
// reads row of query into indexed array 
// advances result pointer
do
{
  echo "<TR><TD>{$Row[0]}</TD>" .
    "<TD>{$Row[1]}</TD><TD>{$Row[2]}</TD></TR>";
  $Row = mysql_fetch_row($QueryResult);
} while ($Row); // tests for content of null
mysql_close($DBConnect);
?>
</TABLE>



</body>

</html>
