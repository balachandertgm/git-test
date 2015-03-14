<?php
echo "Testing Php with git";


	$mysql_host = "localhost";
	$mysql_database = "test";
	$mysql_user = "root";
	$mysql_password = "mavinapps@123";


//MySql Connection
try
{
$con = mysql_connect($mysql_host,$mysql_user,$mysql_password);
}
catch(Exception $e)
{
	echo $e;
}
if(!$con)
{
	die('Connection Error'. mysql_error());
}

//Database Selection
echo mysql_select_db($mysql_database,$con);

echo "mysql working";