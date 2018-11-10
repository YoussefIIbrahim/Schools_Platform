<html>

<?php
/* This will give an error. Note the output
 * above, which is before the header() call
(
AID integer,
grade integer, 
SID integer
)
update Assignments_SolvedBy_Students a
set a.grade = grade
where a.assignment_iD = AID and a.student_iD = SID ; 

 */
 session_start();

 $mysqli = new mysqli("localhost", "root", "", "schoolspr");
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 
$sql = '  update Assignments_SolvedBy_Students a
set a.grade = '.$_POST["grade"].'
where a.assignment_iD = '.$_POST["AID"].' and a.student_iD = '.$_POST["SID"] ; 

$mysqli->query($sql) ;
 echo "<h1> The assignement has been graded  </h1>";


header('Refresh:2; http://localhost/MS4/teacher/index.php');

?>
 