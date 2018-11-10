<?php
session_start();


$email = $_GET['email'];
$level =$_GET['level'];
$name = $_GET['name'];
$vision = $_GET['vision'];
$generalInformation = $_GET['gInfo'];
$fees = $_GET['fees'];
$mission =$_GET['mission'];
$address =$_GET['add'];
$Type = $_GET['type'];
$mainLanguage = $_GET['mLang'];
$schooliD= $_SESSION['school_iD'];



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "SchoolsPr";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else 
if(isset($_GET['email'])){

$sql=" UPDATE Schools set email = '$email' WHERE iD='$schooliD' ";
$result=mysql_query($sql);

if ($conn->query($sql) === TRUE) {
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


    }
  if(isset($_GET['level'])){
  	$sql=" UPDATE Schools set level = '$level' WHERE iD='$schooliD' ";
$result=mysql_query($sql);

if ($conn->query($sql) === TRUE) {
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
        }


    if(isset($_GET['name']))
    {
    	$sql=" UPDATE Schools set name = '$name' WHERE iD='$schooliD' ";
		$result=mysql_query($sql);

if ($conn->query($sql) === TRUE) {
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



    }

      if(isset($_GET['vision']))
      {
  	$sql=" UPDATE Schools set vision = '$vision' WHERE iD='$schooliD' ";
	$result=mysql_query($sql);

if ($conn->query($sql) === TRUE) {
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
        }



          if(isset($_GET['gInfo'])){
  	$sql=" UPDATE Schools set generalInformation = '$generalInformation' WHERE iD='$schooliD' ";
$result=mysql_query($sql);

if ($conn->query($sql) === TRUE) {
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
        }




          if(isset($_GET['fees'])){
  	$sql=" UPDATE Schools set fees = '$fees' WHERE iD='$schooliD' ";
$result=mysql_query($sql);

if ($conn->query($sql) === TRUE) {
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
        }




          if(isset($_GET['mission'])){
  	$sql=" UPDATE Schools set mission = '$mission' WHERE iD='$schooliD' ";
$result=mysql_query($sql);

if ($conn->query($sql) === TRUE) {
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
        }    

          if(isset($_GET['add'])){
  	$sql=" UPDATE Schools set address = '$address' WHERE iD='$schooliD' ";
$result=mysql_query($sql);

if ($conn->query($sql) === TRUE) {
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
        }



          if(isset($_GET['type'])){
  	$sql=" UPDATE Schools set type = '$Type' WHERE iD='$schooliD' ";
$result=mysql_query($sql);

if ($conn->query($sql) === TRUE) {
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
        }


          if(isset($_GET['mLang'])){
  	$sql=" UPDATE Schools set mainLanguage = '$mainLanguage' WHERE iD='$schooliD' ";
$result=mysql_query($sql);

if ($conn->query($sql) === TRUE) {
   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
        }

             echo '<script language="javascript">';
			 echo 'alert("School Info Updated!")';
			 echo '</script>';
			 header('Refresh: 3; URL=http://localhost/MS4/bs-twopage/updateSchoolInfo.php');
			 die();



$conn->close();

    

?>