<?php

	session_start();
$usname=$_GET["uname"];
$pass=$_GET["psw"];	

$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "SchoolsPr";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql=" SELECT * FROM Teachers s inner join  Employees e on s.iD = e.iD where e.username = '$usname' ";

$result=$conn->query($sql);


if($result->num_rows == 1){
    $row = $result->fetch_assoc();
    if ($pass == $row['password']){

        		echo "<br><br><br><br><br><br><br><br><br><br><br><br><div align='center'>Hey there" . " " . $usname . "!</div>";
        		$_SESSION['teacherusername']=$usname;
				header('Refresh: 3; URL=http://localhost/MS4/teacher/index.php');
				die();
        return true;
    }
    else {
        				 echo '<script language="javascript">';
			 echo 'alert("incorrect username/password, please try again")';
			 echo '</script>';
			 header('Refresh: 3; URL=http://localhost/MS4/teacher.php');
			 die();
        return false;
    }
}
else{
    				 echo '<script language="javascript">';
			 echo 'alert("incorrect username/password, please try again")';
			 echo '</script>';
			 header('Refresh: 3; URL=http://localhost/MS4/teacher.php');
			 die();
			 
    return false;
}




?>