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






$ccode = $_GET['code'];
$schooliD= $_SESSION['school_iD'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "SchoolsPr";

$conn = new mysqli($servername, $username, $password, $dbname);


$q = "SELECT * from Courses where code = '$ccode'";



$r = mysqli_query($conn, $q);


while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
    if(!$row){

        return array();

    }
   $values[] = array(
        'code' => $row['code'],
        'name' => $row['name'],
        'description' => $row['description'],
        'grade' => $row['grade'],
        'level_name' => $row['level_name']

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
                                <th>Code</th>
                                 <th>Name</th>
                                 <th>Description</th>
                                 <th>Grade</th>
                                 <th>Level Name</th>

                                 

                                </tr>
                            <?php 
                                
                                foreach( $values as $v ){

                                    echo '
                                    <tr>
                   
                                        <td>'.$v['code'].'</td>
                                        <td>'.$v['name'].'</td>
                                        <td>'.$v['description'].'</td>
                                        <td>'.$v['grade'].'</td>
                                        <td>'.$v['level_name'].'</td>

                                        

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
<h2>Enter Course and Teacher info</h2>
</div>
<form action="updateCourses.php">

  <div class="container">
    <label><b>Course Code</b></label>
    <input type="text" placeholder="Enter Code" name="ccode" required>
    <br>
    <label><b>Course Name</b></label>
    <input type="text" placeholder="Enter name" name="cname" required>
        <br>
    <label><b>Teacher iD</b></label>
    <input type="text" placeholder="Enter iD" name="tiD" required>
        <br>
        <label><b>Student iD</b></label>
    <input type="text" placeholder="Enter iD" name="siD" required>
        <br>
    <button type="submit">Assign</button>
    
  </div>

 
  </div>
</form>
 <form action= "chooseCourseAssignTeacher.php">
  <div class="container" align="center">
    <button type="submit" class="cancelbtn">Cancel</button>
    
  </div>
  </form>

</body>
</html>





