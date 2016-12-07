<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>

<?php
header("Cache-Control: post-check=1,pre-check=2");
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");
$user = $_GET["u"];
$passwd = $_GET["p"];
$sentBack = "Not Found";
$DBConnect = mysql_connect("localhost", "avitabij", "")
  Or die("Error: no database");
$query = "SELECT FIRSTNAME, LASTNAME, PHONE, DOB, MAJOR, ADDRESS, " .
        "CITY, STATE FROM STUDENTS " .
        "WHERE USERID = '${user}' AND PASSWORD = '${passwd}'";
mysql_select_db("avitabij");
$QueryResult = mysql_query($query)
     Or die("Error: Unable to execute the query " .
            "Error code " . mysql_errno($DBConnect) .
            " : " . mysql_error($DBConnect));
$Row = mysql_fetch_row($QueryResult);
if ($Row)
{
  $sentBack=$Row[0];
  for ($i = 1; $i <= 7; $i++)
  {
    $sentBack .= ";" . $Row[$i];
  }
}
echo $sentBack;
?>


</body>

</html>
