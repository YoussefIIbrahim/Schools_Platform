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
    margin-left: 672px;
    
    
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
$studentiD = $_GET['iD'];

$q = "SELECT * FROM Enrolled_Students  where iD = '$studentiD' and username is null "; 



$r = mysqli_query($conn, $q);


while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
    if(!$row){

        return array();

    }
    $values[] = array(
        'ssn' => $row['ssn'],
        'Name' => $row['Name'],
        'gender' => $row['gender'],
        'age' => $row['age'],
        'birthdate' => $row['birthdate'],
        'grade' => $row['grade'],
        'iD' => $row['iD']
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
                                 <th>SSN</th>
                                 <th>Name</th>
                                 <th>Gender</th>
                                 <th>Age</th>
                                 <th>Birthdate</th>
                                 <th>Grade</th>                              
                                 <th>iD</th>
                                 

                                </tr>
                            <?php 
                                
                                foreach( $values as $v ){

                                    echo '
                                    <tr>
                   
                                        <td>'.$v['ssn'].'</td>
                                        <td>'.$v['Name'].'</td>
                                        <td>'.$v['gender'].'</td>
                                        <td>'.$v['age'].'</td>
                                        <td>'.$v['birthdate'].'</td>
                                        <td>'.$v['grade'].'</td>
                                        <td>'.$v['iD'].'</td>
                                   

                                        

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
<form action="updateStudent.php">

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
 <form action= "chooseVerifyStudents.php">
  <div class="container" align-="center">
    <button type="submit" class="cancelbtn">Cancel</button>
    
  </div>
  </form>

</body>
</html>





