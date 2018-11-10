
<html>

<?php
/* This will give an error. Note the output
 * above, which is before the header() call 
 
 (
TID integer,
post date,
content varchar(100),
SID integer
)
 
 */
session_start();
 
 $mysqli = new mysqli("localhost", "root", "", "schoolspr");
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 
$sql = 'CALL Teacher_Write_Monthly_Report ('.$_SESSION["teacherID"].', '.$_POST["date"].', '.$_POST["content"].','.$_POST["id"].') ';
$mysqli->query($sql) ; 
 echo "<h1> The report for  has been submitted </h1>";


header('Refresh:2; http://localhost/MS4/teacher/index.php');

?>
 
