
<html>

<?php
/* This will give an error. Note the output
 * above, which is before the header() call
(
answer varchar(100),
QID integer,
ccode integer,
cname varchar(30)
)

 */
 session_start();

 $mysqli = new mysqli("localhost", "root", "", "schoolspr");
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 
$sql = 'CALL Teacher_Answer_Questions ('.$_POST["answer"].', '.$_POST["id"].' ,'.$_POST["courseC"].','.$_POST ["courseN"].') ';
$mysqli->query($sql) ; 
 echo "<h1> The Answer has been submitted </h1>";


header('Refresh:2; http://localhost/MS4/teacher/index.php');

?>
 