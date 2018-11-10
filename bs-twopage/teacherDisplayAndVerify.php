<?php
session_start();
?>
<html >

<style>

.cancelbtn {
    width: auto;
    padding: 8px 20px;
    margin: 0px 150px;
    background-color: #f44336;
    
}
.container {
    padding: 5px;
}

input[type=text], input[type=password] {
    width: auto;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-0;
    
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 8px 20px;
    margin: 8px 50px;
    border: none;
    cursor: pointer;
    width: auto;
    margin-top: 30px;
}
.container {
    padding: 3px;
    
}

span.psw {
    float: right;
    padding-top: 16px;
    

}
}</style>
<?php




$adminuname= $_SESSION['adminUname'];

$_SESSION['iD'] = $_GET['iD'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "SchoolsPr";
$conn = new mysqli($servername, $username, $password, $dbname);
$teacheriD = $_GET['iD'];

$q = "SELECT * FROM Employees e inner join Teachers t on e.iD = t.iD where e.iD = '$teacheriD' and e.username is null "; 



$r = mysqli_query($conn, $q);


while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
    if(!$row){

        return array();

    }
    $values[] = array(
        'firstName' => $row['firstName'],
        'address' => $row['address'],
        'middleName' => $row['middleName'],
        'lastName' => $row['lastName'],
        'birthdate' => $row['birthdate'],
        'address' => $row['address'],
        'gender' => $row['gender'],
        'email' => $row['email'],
        'years_Of_Experience' => $row['years_Of_Experience']

    );

}

?>
<html>
 <link href="assets/css/custom2.css" rel="stylesheet" />
  
     <!-- FONTAWESOME STYLES-->

        <!-- CUSTOM STYLES-->

     <!-- GOOGLE FONTS-->

                     <table >
                         <tr>
                                <th>First Name</th>
                                 <th>Middle Name</th>
                                 <th>Last Name</th>
                                 <th>Birthdate</th>
                                 <th>Address</th>
                                 <th>Gender</th>
                                 <th>Email</th>
                                 <th>Years Of Experience</th>
                                 

                                </tr>
                            <?php 
                                
                                foreach( $values as $v ){

                                    echo '
                                    <tr>
                   
                                        <td>'.$v['firstName'].'</td>
                                        <td>'.$v['middleName'].'</td>
                                        <td>'.$v['lastName'].'</td>
                                        <td>'.$v['birthdate'].'</td>
                                        <td>'.$v['address'].'</td>
                                        <td>'.$v['gender'].'</td>
                                        <td>'.$v['email'].'</td>
                                        <td>'.$v['years_Of_Experience'].'</td>
                                        

                                    </tr>
                                    ';
                                }
                            
                            
                                   
                                    
                                ?>
                                </table>  
                                </TR>
</TABLE>
</style>
<body background="Pictures-images-simple-wallpaper-for-desktop.jpg">
<div align="center">
<div align="center">
<h2>Assign a username and password</h2>
</div>
<form action="updateTeacher.php">

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
    <br>
    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        <br>
    <button type="submit">Verify</button>
    
  </div>

 
  </div>
</form>
 <form action= "chooseVerifyTeachers.php">
  <div class="container" align="center">
    <button type="submit" class="cancelbtn">Cancel</button>
    
  </div>
  </form>

</body>
</html>





