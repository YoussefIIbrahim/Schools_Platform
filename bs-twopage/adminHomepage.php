<!DOCTYPE html>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
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
                    <a class="navbar-brand" href="adminHomepage.php"><i class="fa fa-square-o "></i>&nbsp;Admin</a>
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
                                <a href="viewStudentsApplications.php">Students</a>
                            </li>
                            <li>
                                <a href="showUnverifiedStudents.php">Newly Enrolled Students</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="updateSchoolInfo.php"><i class="fa fa-table "></i>Update School Info</a>
                    </li>
                    <li>
                        <a href="viewAnnouncements.php"><i class="fa fa-edit "></i>Announcements</a>
                    </li>


                    
                    <li>
                        <a href="showActivities.php"><i class="fa fa-qrcode "></i>Activities</a>
                    </li>
                    <li>
                        <a href="viewCourses.php"><i class="fa fa-bar-chart-o"></i>Assign Teachers to Courses</a>
                    </li>

                    

                </ul>

            </div>


        </nav>

        </nav>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Welcome to WikiSchools</h2>
                    </div>
                </div>
                <!-- /. ROW  -->


                <!-- /. ROW  -->
                <hr />
                    <img src="relation.jpg" class="img-responsive" />
                     <hr />

                    <div class="row">
                    <div class="col-md-12">
                        <h5>Information</h5>
                            This is a website for the parents to track and manage the status of their children and enrol them in schools and they can review the schools.
                    </div>
                     <hr />

                </div>
                <!-- /. ROW  -->

            </div>
        <!-- /. NAV SIDE  -->

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
