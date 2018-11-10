<?php
session_start();

$ccode = $_GET['ccode'];
$cname=$_GET['cname'];
$teacheriD=$_GET['tiD'];
$stuiD = $_GET['siD'];	



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "SchoolsPr";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
    $sqll = "INSERT into Courses_TaughtBy_Teachers_To_Students (ccode, cname, teacher_iD, student_iD)
									values ('$ccode', '$cname', '$teacheriD', $stuiD)";

if ($conn->query($sqll) === TRUE) {



          $conn->query($sqll);

                echo '<script language="javascript">';
             echo 'alert("Teacher Assigned!")';
             echo '</script>';
             header('Refresh: 1; URL=http://localhost/MS4/bs-twopage/viewCourses.php');
                die();
      } else {
    echo "Error: " . $sqll . "<br>" . $conn->error;
}

$conn->close();


?>