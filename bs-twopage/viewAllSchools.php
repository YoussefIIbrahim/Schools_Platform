<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "SchoolsPr";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


$q2 = "SELECT * FROM Schools order by level"; 
$r2 = mysqli_query($conn, $q2);

while ($row2 = mysqli_fetch_array($r2, MYSQLI_ASSOC)) {
    $values2[] = array(
        'name' => $row2['name'],
        'level' => $row2['level'],



    );
}
?>

<!DOCTYPE html>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Two Page</title>
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

                            

                     <li><a href="http://localhost/MS4/login.php">Login</a></li>
                        <li><a href="http://localhost/MS4/signUp.php">Sign up</a></li>
                                <form action="schoolSearch.php"><input  class="form-control" placeholder="Search for a school" name="inputSearch" />  </form>                 
                                
                            
                        
                           

                    </ul>
                </div>

            </div>
        </div>

                        
                    <div class="col-md-7">
                        

                                </div>
                              

        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center user-image-back">
                        <img src="assets/img/find_user.png" class="img-responsive" />
                     
                    </li>


                    <li>
                        <a href="index.php"><i class="fa fa-desktop "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="ViewAllSchools.php"><i class="fa fa-table "></i>View All Schools</a>
                    </li>
                    
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Schools</h2>   

                        <table class="table table-striped table-bordered table-hover">
                         <tr>
                                    <th>School Name</th>
                                    <th>level</th>

                                </tr>
                            <?php
                                foreach($values2 as $v){
                                    echo '
                                    <tr>
                                        <td>'.$v['name'].'</td>
                                        <td>'.$v['level'].'</td>

                                    </tr>
                                    ';
                                }
                                ?>
                                </table>
                    </div>
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
