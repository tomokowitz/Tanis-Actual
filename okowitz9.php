<?php
header("Cache-Control: post-check=1,pre-check=2");
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");
$teamid = $_GET["teamid"];
$sentBack = "Not Found";
$DBConnect = mysql_connect("localhost", "okowitzt970", "")
  Or die("Error: no database");
$query = "SELECT TEAM_NAME, TEAM_CITY FROM BASEBALL " .
        "WHERE TEAM_ID = '${teamid}'";
mysql_select_db("okowitzt970");
$QueryResult = mysql_query($query)
     Or die("Error: Unable to execute the query " .
            "Error code " . mysql_errno($DBConnect) .
            " : " . mysql_error($DBConnect));
$Row = mysql_fetch_row($QueryResult);
if ($Row)
{
  $sentBack=$Row[0];
  for ($i = 1; $i <= 2; $i++)
  {
    $sentBack .= ";" . $Row[$i];
  }
}
echo $sentBack;
?>
