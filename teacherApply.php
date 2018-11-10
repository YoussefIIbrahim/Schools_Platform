<?php
require 'connect.php';
$Schoolname=$_GET["schoolname"];
$sql="SELECT iD FROM Schools WHERE name='$Schoolname' ";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $username and $password, table row must be 1 row
if($count==1){

	 
        $fName=$_GET["fname"];
        $Mname=$_GET["mname"];
        $lName=$_GET["lname"]; 
        $BDate =$_GET["bDate"]; 
        $Address=$_GET["address"];
        $gender= $_GET["gend"];
        $Email=$_GET["EMail"]; 
        
        $resultt=mysql_query("SELECT iD FROM Schools WHERE name ='$Schoolname'");
		while ($row = mysql_fetch_array($resultt)) 
		{
    	$siD= $row['iD'];  
		}
        $yeofex=$_GET["yoe"];

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

$sqll = "INSERT INTO Employees (firstName, middleName, lastName, birthdate, address, gender, email, school_iD)
        values ('$fName', '$Mname', '$lName', '$BDate', '$Address', '$gender', '$Email', '$siD')";

if ($conn->query($sqll) === TRUE) {
	$last_id = $conn->insert_id;
    $sqlll= "INSERT INTO Teachers (iD,years_Of_Experience) 
    						values ('$last_id', '$yeofex')";
    						$conn->query($sqlll);
    						echo '<script language="javascript">';
             echo 'alert("Thank you for applying on our website! your application will be reviewed shortly")';
             echo '</script>';
             header('Refresh: 1; URL=http://localhost/MS4/teacherHomepage.php');
                die();
} else {
    echo "Error: " . $sqll . "<br>" . $conn->error;
}

$conn->close();

    }

    else
    	echo '<script language="javascript">';
             echo 'alert("school name is wrong please check again")';
             echo '</script>';
             header('Refresh: 1; URL=http://localhost/MS4/teacherSignUp.php');
                die();



?>