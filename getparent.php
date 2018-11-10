<?php
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


$sql="SELECT * FROM Parents where username = '$usname' ";

$result=$conn->query($sql);


// Mysql_num_row is counting table row
//$count=mysql_num_rows($result);
// If result matched $username and $password, table row must be 1 row
if($result->num_rows == 1){
    $row = $result->fetch_assoc();
    if ($pass == $row['password']){

        		echo "<br><br><br><br><br><br><br><br><br><br><br><br><div align='center'>Hey there" . " " . $usname . "!</div>";
        		$_SESSION['parentusername']=$usname;
        		$_SESSION['parentpassword']=$pass;
				header('Refresh: 3; URL=http://localhost/parent/index.php');
				die();
        return true;
    }
    else {
        				 echo '<script language="javascript">';
			 echo 'alert("incorrect username/password, please try again")';
			 echo '</script>';
			 header('Refresh: 3; URL=http://localhost/MS4/parent.php');
			 die();
        return false;
    }
}
else{
    				 echo '<script language="javascript">';
			 echo 'alert("incorrect username/password, please try again")';
			 echo '</script>';
			 header('Refresh: 3; URL=http://localhost/MS4/parent.php');
			 die();
			 
    return false;
}











			
			
			


?>