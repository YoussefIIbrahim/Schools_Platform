<?php

require 'connect.php';
$query = "SELECT * FROM Schools";

if($is_query_executed=mysql_query($query))
{
	echo "query executed";

	while($query_execute = mysql_fetch_assoc($is_query_executed))

		{
			echo '<table border="1" style = "width:300px"><tr><td>'.$query_execute['name'].'</td><td>'.$query_execute['iD'].'</td></tr></table>';
		}
		

}
else
{
	echo "query cannot be executes";
}

?>