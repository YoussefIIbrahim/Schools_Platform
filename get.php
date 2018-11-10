<?php

if(isset($_GET["uname"]) && isset($_GET["psw"]) && !empty($_GET["uname"]) && !empty($_GET["psw"]))
{
	$usname=$_GET["uname"];
	$pass=$_GET["psw"];	

	require 'connect.php';
	$query = "SELECT username, password FROM Parents";

	if($is_query_executed=mysql_query($query))
	{

	while($query_execute = mysql_fetch_assoc($is_query_executed))

		{
			if($query_execute['username'] == $usname && $query_execute['password'] == $pass)
			{

				echo "<br><br><br><br><br><br><br><br><br><br><br><br><div align='center'>Hey there" . " " . $query_execute['username'] . "!</div>";
				header('Refresh: 3; URL=http://localhost/MS4/homepage.php');
				die();
				
				
			}
			
			echo "<br><br><br><br><br><br><br><br><br><br><br><br><div align='center'>incorrect username/password, please try again" . "!</div>" ;
			header('Refresh: 8; URL=http://localhost/MS4/parent.php');
				die();

		}
	
		

	}
	else
		{
		echo "query cannot be executed";
		}




}
else 
{
	echo "<br><br><br><br><br><br><br><br><br><br><br><br><div align='center'>incorrect username/password <br> please try again" . "!</div>" ;
			header('Refresh: 8; URL=http://localhost/MS4/parent.php');
				die();
}





?>