<?php
session_start();

$usname=$_GET['uname'];
$pass=$_GET['psw'];	
$teacheriD = $_SESSION['iD'];


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

$sql = "UPDATE Employees SET username='$usname', password='$pass' WHERE iD='$teacheriD'";

if (mysqli_query($conn, $sql)) {
     echo '<script language="javascript">';
			 echo 'alert("Teacher Verified!")';
			 echo '</script>';
			 header('Refresh: 3; URL=http://localhost/MS4/bs-twopage/chooseVerifyTeachers.php');
			 die();
} else {
     echo '<script language="javascript">';
			 echo 'alert("There was an error, please try again!")';
			 echo '</script>';
			 header('Refresh: 3; URL=http://localhost/MS4/bs-twopage/teacherDisplayAndVerify.php');
			 die();
}

mysqli_close($conn);
?>