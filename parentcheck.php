<?php

require 'connect.php';
$usname=$_GET["uname"]; 
$sql="SELECT * FROM Parents WHERE username='$usname' ";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $username and $password, table row must be 1 row
if($count==1){
    /*$row = mysql_fetch_assoc($result);
    if (md5(md5($row['salt']).md5($password)) == $row['password']){
        session_register("uname");
        session_register("psw"); 
        echo "Login Successful";
        return true;*/
        echo '<script language="javascript">';
             echo 'alert("Username already exists, please pick a different one!")';
             echo '</script>';
             header('Refresh: 1; URL=http://localhost/MS4/parentSignUp.php');
                die();



    }
    else {
        $usname=$_GET["uname"];
        $pass=$_GET["psw"];
        $fName=$_GET["fname"];
        $lName=$_GET["lname"];  
        $Address=$_GET["address"];
        $Email=$_GET["email"]; 
        $Pnum=$_GET["pNum"];
        $passCheck=$_GET["pswCheck"];
        if($pass != $passCheck)
        {
            echo '<script language="javascript">';
             echo 'alert("Passwords dont match, please try again!")';
             echo '</script>';
             header('Refresh: 1; URL=http://localhost/MS4/parentSignUp.php');
                die();
        }
        else
        /*require 'connect.php'; 
            $sql2="insert into Parents (username, address, email, password, firstName, lastName, home_phone_number)
        values ($usname, $Address, $Email, $pass, $fName, $lName, $PNum)";
       mysql_query($sql2);
       echo 'done'; */
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

$sqll = "INSERT INTO Parents (username, address, email, password, firstName, lastName, home_phone_number)
        values ('$usname', '$Address', '$Email', '$pass', '$fName', '$lName', '$Pnum')";;

if ($conn->query($sqll) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sqll . "<br>" . $conn->error;
}

$conn->close();

    }


?>