<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "SchoolsPr";
$stuiD = $_SESSION['stuiD'] ;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());



}
if($_GET['accepted'] == "1")
{



$sql = "UPDATE Parents_ApplyAt_Schools_for_Students SET accepted = '1' WHERE student_iD='$stuiD'";

if (mysqli_query($conn, $sql)) {
     echo '<script language="javascript">';
			 echo 'alert("Student Accepted!")';
			 echo '</script>';
			 header('Refresh: 3; URL=http://localhost/MS4/bs-twopage/acceptRejectAStudent.php');
			 die();
} 
}
else if($_GET['accepted'] == "0") {

$sql = "UPDATE Parents_ApplyAt_Schools_for_Students SET accepted = '0' WHERE student_iD='$stuiD'";

if (mysqli_query($conn, $sql)) {
     echo '<script language="javascript">';
			 echo 'alert("Student Rejected!")';
			 echo '</script>';
			 header('Refresh: 3; URL=http://localhost/MS4/bs-twopage/acceptRejectAStudent.php');
			 die();
}
}

else {
	     echo '<script language="javascript">';
			 echo 'alert("Something went wrong! please try again :(")';
			 echo '</script>';
			 header('Refresh: 3; URL=http://localhost/MS4/bs-twopage/acceptRejectAStudent.php');
			 die();
}


mysqli_close($conn);




?>