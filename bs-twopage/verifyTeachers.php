<?php
session_start();

$adminuname= $_SESSION['adminUname'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "SchoolsPr";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


$q = "SELECT * FROM Teachers t inner join Employees e on e.iD = t.iD  where username is null and school_iD = (SELECT school_iD from Employees where username = '$adminuname' )"; 


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
        'years_Of_Experience' => $row['years_Of_Experience'],
        'iD' => $row['iD']
    );
}

?>




<!DOCTYPE html>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Applying Teachers</title>
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
                    <a class="navbar-brand" href="adminHomepage.php"><i class="fa fa-square-o "></i>&nbsp;WikiSchools</a>
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
                        <a href="adminHomepage.php"><i class="fa fa-desktop "></i>Admin Dashboard</a>
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
                                <a href="showUnverifiedStudents.php">Newly Enrolled Students</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-table "></i>Update School Info</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-edit "></i>Announcements </a>
                    </li>



                    <li>
                        <a href="showActivities.php"><i class="fa fa-qrcode "></i>Activities</a>
                    </li>


               
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Unverified Teachers</h2> 
                     <table class="table table-striped table-bordered table-hover">
                         <tr>
                                <th>First Name</th>
                                 <th>Middle Name</th>
                                 <th>Last Name</th>
                                 <th>Birthdate</th>
                                 <th>Address</th>
                                 <th>Gender</th>
                                 <th>Email</th>
                                 <th>Years Of Experience</th>                                
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
                   
                                        <td>'.$v['firstName'].'</td>
                                        <td>'.$v['middleName'].'</td>
                                        <td>'.$v['lastName'].'</td>
                                        <td>'.$v['birthdate'].'</td>
                                        <td>'.$v['address'].'</td>
                                        <td>'.$v['gender'].'</td>
                                        <td>'.$v['email'].'</td>
                                        <td>'.$v['years_Of_Experience'].'</td>
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
                        <a href="http://localhost/MS4/bs-twopage/chooseVerifyTeachers.php" class="btn btn-success">Verify</a>
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
