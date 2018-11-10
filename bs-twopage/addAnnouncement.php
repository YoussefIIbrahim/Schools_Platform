<?php
session_start();

$adminuname= $_SESSION['adminUname'];
$adminiD = $_SESSION['adminiD'];

        $date=$_GET["date"];
        $title=$_GET["title"];
        $desc=$_GET["description"]; 
        $type =$_GET["type"]; 

        


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "SchoolsPr";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sqll = "INSERT INTO Announcements (date, title, description, type, admin_iD)
        values ('$date', '$title', '$desc', '$type', '$adminiD')";

if ($conn->query($sqll) === TRUE) {

    						echo '<script language="javascript">';
             echo 'alert("Announcement posted!")';
             echo '</script>';
             header('Refresh: 1; URL=http://localhost/MS4/bs-twopage/viewAnnouncements.php');
                die();
} else {
    echo "Error: " . $sqll . "<br>" . $conn->error;
}

$conn->close();

    


?>