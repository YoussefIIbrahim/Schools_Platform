<?php
require 'connect.php';
$Schoolname=$_GET["sname"];
$parentFiName=$_GET["parfname"];
$parentLaName=$_GET["parlname"];

$sql="SELECT iD FROM Schools WHERE name='$Schoolname' ";
$sqlI="SELECT iD FROM Parents WHERE firstName='$parentFiName' and lastName = '$parentLaName' ";
$result=mysql_query($sql);
$resultI=mysql_query($sqlI);


// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
$countI=mysql_num_rows($resultI);
// If result matched $username and $password, table row must be 1 row
if($count==1&&$countI==1){

	 
        $ssn=$_GET["ssn"];
        $Name=$_GET["name"];
        $Username=$_GET["username"];
        $Password=$_GET["pass"];
        $Password2=$_GET["pass2"];
        $BDate =$_GET["bDate"]; 
        $Grade=$_GET["grade"];
        $Gender= $_GET["gend"];
        
        $resultt=mysql_query("SELECT iD FROM Schools WHERE name ='$Schoolname'");
		while ($row = mysql_fetch_array($resultt)) 
		{
   		 $siD= $row['iD'];  
		}
		 $resulttt=mysql_query("SELECT iD FROM Parents WHERE firstName='$parentFiName' and lastName = '$parentLaName' ");
		while ($row = mysql_fetch_array($resulttt)) 
		{
   		 $piD= $row['iD'];  
		}
        

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

$sqll = "INSERT INTO Enrolled_Students (ssn, name, gender, birthdate, grade, password, username, school_iD,  parent_iD)
        values ('$ssn', '$Name', '$Gender', '$BDate', '$Grade', '$Password', '$Username', '$siD', '$piD')";

if ($conn->query($sqll) === TRUE) {

    						echo '<script language="javascript">';
             echo 'alert("Thank you for applying on our website! your application will be reviewed shortly")';
             echo '</script>';
             header('Refresh: 1; URL=http://localhost/pluton/Html/indexStudents.php');
                die();
} else {
    echo "Error: " . $sqll . "<br>" . $conn->error;
}

$conn->close();

    }

    else
    	echo '<script language="javascript">';
             echo 'alert("parent name or school name is wrong please check again")';
             echo '</script>';
             header('Refresh: 1; URL=http://localhost/pluton/Html/studentSignUp.php');
                die();



?>