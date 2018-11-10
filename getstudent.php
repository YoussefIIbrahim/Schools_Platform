<?php

	if (session_status()==PHP_SESSION_NONE) {
            session_start();
    }
$usname=$_GET["uname"];
$pass=$_GET["psw"];	

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


$sql=" SELECT * FROM Enrolled_Students where username = '$usname' ";


$result=$conn->query($sql);


if($result->num_rows == 1){
    $row = $result->fetch_assoc();
    if($row["grade"]>9) {
        if ($pass == $row['password']){

        	echo "<br><br><br><br><br><br><br><br><br><br><br><br><div align='center'>Hey there" . " " . $usname . "!</div>"; 
        	// hageeb kol 7aga b query w ba3dein h a3mel sessions tanyeen a5od kol el info bta3et el student
            $_SESSION['username']=$usname;
		  header('Refresh: 3; URL=http://localhost/pluton/Html/indexStudentsclubs.php');
		  die();
            return true;
        }
        else {
            echo '<script language="javascript">';
		  echo 'alert("incorrect username/password, please try again")';
		  echo '</script>';
		  header('Refresh: 3; URL=http://localhost/pluton/Html/student.php');
		  die();
            return false;
        }
    }
    else {
        if ($pass == $row['password']){

            echo "<br><br><br><br><br><br><br><br><br><br><br><br><div align='center'>Hey there" . " " . $usname . "!</div>"; 
            // hageeb kol 7aga b query w ba3dein h a3mel sessions tanyeen a5od kol el info bta3et el student
            $_SESSION['username']=$usname;
          header('Refresh: 3; URL=http://localhost/pluton/Html/indexStudents.php');
          die();
            return true;
        }
        else {
            echo '<script language="javascript">';
          echo 'alert("incorrect username/password, please try again")';
          echo '</script>';
          header('Refresh: 3; URL=http://localhost/pluton/Html/student.php');
          die();
            return false;
        }
    }
}
else {
    echo '<script language="javascript">';
	echo 'alert("incorrect username/password, please try again")';
	echo '</script>';
	header('Refresh: 3; URL=http://localhost/pluton/Html/student.php');
	die();
    return false;
}




?>