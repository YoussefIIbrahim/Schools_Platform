
<html>

<?php
/* This will give an error. Note the output
 * above, which is before the header() call */
 
  session_start();
 $mysqli = new mysqli("localhost", "root", "", "schoolspr");
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 
$sql = 'CALL Teacher_Post_Assignments ('.$_SESSION["teacherID"].', '.$_POST["postDate"].', '.$_POST["dueDate"] .','.$_POST["content"].','$_POST["courseC"].','.$_POST ["courseN"].') ';
$mysqli->query($sql) ; 
 echo "<h1> The Assignment has been submitted </h1>";


header('Refresh:2; http://localhost/MS4/teacher/index.php');

?>
 