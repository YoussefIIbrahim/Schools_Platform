<?php
session_start();

$adminiD = $_SESSION['adminiD'];
$name = $_GET['name'];
$code =$_GET['code'];
$description = $_GET['description'];
$date = $_GET['date'];
$type = $_GET['type'];
$equipment = $_GET['equipment'];
$location =$_GET['location'];
$teacheriD =$_GET['teacheriD'];





$servername = "localhost";
$username = "root";
$password = "";
$dbname = "SchoolsPr";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sqll = "INSERT INTO Activities (name, code, description, date, type, equipment, location)
        values ('$name', '$code', '$description', '$date', '$type', '$equipment', '$location')";

if ($conn->query($sqll) === TRUE) {

    $sqll = "INSERT INTO Administrators_Create_Activities_Assign_Teachers (admin_iD, teacher_iD, activity_code)
        values ('$adminiD', '$teacheriD', '$code')";

          $conn->query($sqll);

                echo '<script language="javascript">';
             echo 'alert("Activity Posted!")';
             echo '</script>';
             header('Refresh: 1; URL=http://localhost/MS4/bs-twopage/showActivities.php');
                die();
      } else {
    echo "Error: " . $sqll . "<br>" . $conn->error;
}

$conn->close();

    

    

?>