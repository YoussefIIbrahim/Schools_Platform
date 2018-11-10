<?php
session_start();

$usname=$_GET['uname'];
$pass=$_GET['psw'];	
$studentiD = $_SESSION['iD'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "SchoolsPr";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE Enrolled_Students SET username='$usname', password='$pass' WHERE iD='$studentiD'";

if (mysqli_query($conn, $sql)) {
     echo '<script language="javascript">';
			 echo 'alert("Student Verified!")';
			 echo '</script>';
			 header('Refresh: 3; URL=http://localhost/MS4/bs-twopage/chooseVerifyStudents.php');
			 die();
} else {
     echo '<script language="javascript">';
			 echo 'alert("There was an error, please try again!")';
			 echo '</script>';
			 header('Refresh: 3; URL=http://localhost/MS4/bs-twopage/studentDisplayAndVerify.php');
			 die();
}

mysqli_close($conn);
?>