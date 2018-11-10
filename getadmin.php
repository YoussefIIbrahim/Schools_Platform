<?php
session_start();
	
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


$sql=" SELECT * FROM Administrators s inner join  Employees e on s.iD = e.iD where e.username = '$usname' ";

$result=$conn->query($sql);


if($result->num_rows == 1){
    $row = $result->fetch_assoc();
    if ($pass == $row['password']){
    			
    			$_SESSION['adminUname'] = $usname;

        		echo "<br><br><br><br><br><br><br><br><br><br><br><br><div align='center'>Hey there" . " " . $usname . "!</div>";
				header('Refresh: 3; URL=http://localhost/MS4/bs-twopage/adminHomepage.php');
				die();
        return true;
    }
    else {
        				 echo '<script language="javascript">';
			 echo 'alert("incorrect username/password, please try again")';
			 echo '</script>';
			 header('Refresh: 3; URL=http://localhost/MS4/admin.php');
			 die();
        return false;
    }
}
else{
    				 echo '<script language="javascript">';
			 echo 'alert("incorrect username/password, please try again")';
			 echo '</script>';
			 header('Refresh: 3; URL=http://localhost/MS4/admin.php');
			 die();
			 
    return false;
}




?>