<?php

$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_password ='';

if(!@mysql_connect($mysql_host,$mysql_user,$mysql_password))
{


     die('Cannot connect to Database');
}

else
    {
        if(@mysql_select_db('SchoolsPr'))
            {
               // echo 'Connection established';
             }

        else 
            {
                die('Cannot connect to database');
            }
            
    }


?>


