<?php
session_start();
$adminuname= $_SESSION['username'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "SchoolsPr";
$input = $_GET["inputSearch"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


$q2 = "SELECT * FROM Schools where name ='$input'"; 
$q1 =
"SELECT review_text from Parents_Review_Schools where school_iD = (select iD from Schools where name = '$input')";

$q4 = "SELECT iD from Employees where username = '{$adminuname}' ";
$r4 = mysqli_query($conn, $q4);

$s= mysqli_fetch_array($r4, MYSQLI_ASSOC);
$adminiD = $s['iD'];

$q3 = "SELECT * from Announcements where admin_iD = '$adminiD' ";


$r2 = mysqli_query($conn, $q2);
$r1 = mysqli_query($conn, $q1);
$r3 = mysqli_query($conn, $q3);


while ($row2 = mysqli_fetch_array($r2, MYSQLI_ASSOC)) {
     if(!$row2){

        return array();

    }
    $values2[] = array(
        'name' => $row2['name'],
        'address' => $row2['address'],
        'email' => $row2['email'],
        'level' => $row2['level'],
        'type' => $row2['type'],
        'mission' => $row2['mission'],
        'vision' => $row2['vision'],
        'generalInformation' => $row2['generalInformation'],
        'mainLanguage' => $row2['mainLanguage'],
        'fees' => $row2['fees']
    );
}

while($row1=mysqli_fetch_array($r1, MYSQLI_ASSOC))
{
     if(!$row1){

        return array();

    }

 $values1[] = array(
        'review_text' => $row1['review_text']

    );
}


while($row3=mysqli_fetch_array($r3, MYSQLI_ASSOC)){
     if(!$row3){

        return array();

    }
 		$valuesanc[] = array(
        'date' => $row3['date'],
        'title' => $row3['title'],
        'description' => $row3['description'],
        'type' => $row3['type']

    );

}



?>

<!DOCTYPE html>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Schools</title>
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
                        <a href="viewAllSchools.php"><i class="fa fa-table "></i>View All Schools</a>
                    </li>
                  
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>School info</h2> 
                     <table class="table table-striped table-bordered table-hover">
                         <tr>
                         		<th>School Name</th>
                                 <th>Address</th>
                                 <th>email</th>
                                 <th>level</th>
                                 <th>Type</th>
                                 <th>mission</th>
                                 <th>vision</th>
                                 <th>General Info</th>
                                 <th>Main language</th>
                                 <th>Fees</th>

                                </tr>
                            <?php
                            if(empty($values2)){

                                    return;
                                }
                                else
                                {
                                foreach($values2 as $v){

                                    echo '
                                    <tr>
                   
                                        <td>'.$v['name'].'</td>
                                        <td>'.$v['address'].'</td>
                                        <td>'.$v['email'].'</td>
                                        <td>'.$v['level'].'</td>
                                        <td>'.$v['type'].'</td>
                                        <td>'.$v['mission'].'</td>
                                        <td>'.$v['vision'].'</td>
                                        <td>'.$v['generalInformation'].'</td>
                                        <td>'.$v['mainLanguage'].'</td>
                                        <td>'.$v['fees'].'</td>

                                    </tr>
                                    ';
                                }
                            }
                                ?>
                                </table>  
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                  <h2>Reviews</h2> 
                     <table class="table table-striped table-bordered table-hover">
                         <tr>
                         		
                                 
                                

                                </tr>
                            <?php
                            if(empty($values1)){

                                    return;
                                }
                                else
                                {
                                foreach($values1 as $v){

                                    echo '
                                    <tr>
                   
                                        <td>'.$v['review_text'].'</td>
 

                                    </tr>
                                    ';
                                }
                            }
                                ?>
                                </table>  
							

                                <h2>Announcements</h2> 
                     		<table class="table table-striped table-bordered table-hover">
                         <tr>
                         		
                                </tr>
                            	<?php
                                if(empty($valuesanc)){

                                    return;
                                }
                                else
                                {
                                foreach($valuesanc as $v3){

                                    echo '
                                    <tr>
                   
                                        <td>'.$v3['date'].'</td>
                                        <td>'.$v3['title'].'</td>
                                        <td>'.$v3['description'].'</td>
                                        <td>'.$v3['type'].'</td>
 

                                    </tr>
                                    ';
                                }
                            }

                                ?>
                                </table>  
                                
                    </div>
                </div>              

              
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
