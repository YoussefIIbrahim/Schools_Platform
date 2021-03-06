<?php
session_start();

$adminuname= $_SESSION['adminUname'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "SchoolsPr";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


$q = "SELECT * FROM Enrolled_Students where username is null and school_iD = (SELECT school_iD from Employees where username = '$adminuname' )"; 


$r = mysqli_query($conn, $q);



 
while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
    if(!$row){

        return array();

    }
    $values[] = array(
        'ssn' => $row['ssn'],
        'name' => $row['name'],
        'gender' => $row['gender'],
        'age' => $row['age'],
        'birthdate' => $row['birthdate'],
        'grade' => $row['grade'],
        'iD' => $row['iD']
    );
}

?>




<!DOCTYPE html>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Enrolled Students</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
     
           
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><i class="fa fa-square-o "></i>&nbsp;WikiSchools</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                     <li><a href="http://localhost/MS4/bs-twopage/index.php">Sign out</a></li>
                        <form action="schoolSearch.php"><input  class="form-control" placeholder="Search for a school" name="inputSearch" /> </form>    
                        
                    </ul>
                </div>

            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center user-image-back">
                        <img src="assets/img/find_user.png" class="img-responsive" />
                     
                    </li>


                    <li>
                        <a href="index.html"><i class="fa fa-desktop "></i>Admin Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-edit "></i>Applicants<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="verifyTeachers.php">Teachers</a>
                            </li>
                            <li>
                                <a href="#">Students</a>
                            </li>
                            <li>
                                <a href="showVerifyStudents.php">Newly Enrolled Students</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="updateSchoolInfo.php"><i class="fa fa-table "></i>Update School Info</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-edit "></i>Announcements</a>
                    </li>


                    <li>
                        <a href="#"><i class="fa fa-sitemap "></i>Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>

                                </ul>

                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="showActivities.php"><i class="fa fa-qrcode "></i>Activities</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o"></i>Mettis Charts</a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-edit "></i>Last Link </a>
                    </li>
                    <li>
                        <a href="http://localhost/MS4/bs-twopage/blank.php"><i class="fa fa-table "></i>Blank Page</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Unverified Students</h2> 
                     <table class="table table-striped table-bordered table-hover">
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
                                if(empty($values)){
                                    return;
                                }
                                else
                                {
                                foreach( $values as $v ){

                                    echo '
                                    <tr>
                   
                                        <td>'.$v['ssn'].'</td>
                                        <td>'.$v['name'].'</td>
                                        <td>'.$v['gender'].'</td>
                                        <td>'.$v['age'].'</td>
                                        <td>'.$v['birthdate'].'</td>
                                        <td>'.$v['grade'].'</td>
                                        <td>'.$v['iD'].'</td>
                                   

                                        

                                    </tr>
                                    ';
                                
                            }
                        }
                            
                            
                                   
                                    
                                ?>
                                </table>   
                    </div>
                </div>       
                                    <div class="col-md-4">
                        <a href="http://localhost/MS4/bs-twopage/chooseVerifyStudents.php" class="btn btn-success">Verify</a>
                    </div>       
                 <!-- /. ROW  -->
                  <hr />
              
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
