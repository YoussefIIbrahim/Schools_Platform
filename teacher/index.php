<?php

session_start();

$teacherUsername = $_SESSION['teacherusername'] ;  

 $mysqli = new mysqli("localhost", "root", "1234", "schoolspr");
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 


$queryyyy = "SELECT iD FROM employees where username = '$teacherUsername' " ; 
$result1= $mysqli->query($queryyyy);
                    if (is_object($result1) && $result1->num_rows > 0) {
                        while($row1 = $result1->fetch_assoc()) {
                            $teacherID=$row1['iD'];
                            $_SESSION['teacherID']=$row1['iD'];
                        }
                    }
					$result1->close () ; 
					
				

$ViewListCourses = "SELECT distinct c.name , c.code , c.grade , c.level_name FROM courses c
 inner join courses_taughtby_teachers_to_students c1 on c.code = c1.ccode 
 where (c1.teacher_ID ='$teacherID' ) 
 order by c.grade , c.level_name
 "; 
 $arr1 = $mysqli->query($ViewListCourses) ; 
 
 // Assignment part 
 $ViewListOfAssignment = "Select distinct  a2.assignment_iD ,a2.solution , s.name ,s.iD from assignments  a 
inner join assignments_for_courses_postedby_teachers a1 on a.iD = a1.assignment_iD 
inner join assignments_solvedby_students a2 on  a2.assignment_iD= a.iD 
inner join enrolled_students s on s.iD = a2.student_iD 
where '$teacherID' = a1.teacher_iD  
order by a1.cname,a1.ccode,s.iD " ; 

 
// $InsertAssignment = "" ; 
 
  // $GradeAssignment = "CALL Teacher_Grade_Assignments ('$') " ; 
 
 // Student part 
 $ViewListOfStudentsTaughtByTeacher = "select distinct e.Name , e.grade
from Enrolled_Students e inner join courses_taughtby_teachers_to_students cts
on cts.student_iD=e.iD
where cts.teacher_iD='$teacherID'
order by e.grade,e.Name " ; 
 // questions part 
 
 
 $ViewListOfQuestions = "select distinct q.question_iD , q.question , s.Name , cts.ccode , cts.cname
from Questions q inner join courses_taughtby_teachers_to_students cts
on q.course_code=cts.ccode and q.course_name=cts.cname
inner join enrolled_students s on s.iD = cts.student_iD
where cts.teacher_iD='$teacherID'" ; 

 
 //$AnswerQuestions = "" ; 
 
 // Insert Report 
// $InsertReport = "" ;  
 

/*
$servername = "localhost";
$username = "root";
$password = "1234";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection


*/ 
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
		
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Always force latest IE rendering engine -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Meta Keyword -->
        <meta name="keywords" content="one page, business template, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
        <!-- meta character set -->
        <meta charset="utf-8">

        <!-- Site Title -->
        <title>Wiki Schools</title>
        
        <!--
        Google Fonts
        ============================================= -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet" type="text/css">
		
        <!--
        CSS
        ============================================= -->
        <!-- Fontawesome -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Fancybox -->
        <link rel="stylesheet" href="css/jquery.fancybox.css">
        <!-- owl carousel -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <!-- Animate -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/main.css">
        <!-- Main Responsive -->
        <link rel="stylesheet" href="css/responsive.css">
		
		
		<!-- Modernizer Script for old Browsers -->
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
		
    </head>
    <body>
<?php 



?>
        <!--
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-fixed-top">
            <div class="container">

                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->

                    <!-- logo -->
                    <h1 class="navbar-brand">
                        <a href="#body">
                            <img src="img/logo.png" alt="Kasper Logo">
                        </a>
                    </h1>
                    <!-- /logo -->

                    </div>

                    <!-- main nav -->
                    <nav class="collapse navigation navbar-collapse navbar-right" role="navigation">
                        <ul id="nav" class="nav navbar-nav">
                            <li class="current"><a href="#home">Home</a></li>
                            <li><a href="#service">Courses</a></li>
                            <li><a href="#portfolio">assignments</a></li>
                            <li><a href="#about">Questions</a></li>
                            <li><a href="#pricing">Students</a></li>
                            <li><a href="#contact">Reports</a></li>
                        </ul>
                    </nav>
                    <!-- /main nav -->
                </div>

            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->


        <!--
        Home Slider
        ==================================== -->
        <section id="home">     
            <div id="home-carousel" class="carousel slide" data-interval="false">
                <ol class="carousel-indicators">
                    <li data-target="#home-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#home-carousel" data-slide-to="1"></li>
                    <li data-target="#home-carousel" data-slide-to="2"></li>
                </ol>
                <!--/.carousel-indicators-->

                <div class="carousel-inner">

                    <div class="item active"  style="background-image: url('img/slider/bg1.jpg')" >
                        <div class="carousel-caption">
                            <div class="animated bounceInRight">
                                <h2>  <?php echo ("Welcome to <b> Wiki Schools </b>, " .$teacherUsername . "</h2>"); ?> <br>    
								
                               
                            </div>
                        </div>
                    </div>              

                    <div class="item" style="background-image: url('img/slider/bg2.jpg')">                
                        <div class="carousel-caption">
                            <div class="animated bounceInDown">
                                 <h2>  <?php echo ("Hello " .$teacherUsername . "</h2>"); ?> <br>  
                                 <h3> At <b>Wiki Schools</b> you can answer questions posted by students regarding courses you teach. </h3>	 							 
                            </div>
                        </div>
                    </div>

                    <div class="item" style="background-image: url('img/slider/bg3.jpg')">                 
                         <div class="carousel-caption">
                            <div class="animated bounceInUp">
                                <h2>  <?php echo ("Hello " .$teacherUsername . "</h2>"); ?> <br>  
                                 <h3> At <b>Wiki Schools</b> you can post as many assignments as you can ..  </h3>	 
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.carousel-inner-->
                <nav id="nav-arrows" class="nav-arrows hidden-xs hidden-sm visible-md visible-lg">
                    <a class="sl-prev hidden-xs" href="#home-carousel" data-slide="prev">
                        <i class="fa fa-angle-left fa-3x"></i>
                    </a>
                    <a class="sl-next" href="#home-carousel" data-slide="next">
                        <i class="fa fa-angle-right fa-3x"></i>
                    </a>
                </nav>

            </div>
        </section>
        <!--
        End #home Slider
        ========================== -->

        
        <!--
        #service
        ========================== -->
        <section id="service">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center wow fadeInDown">
                            <h2>Courses</h2>  
							<p>Here you can view all courses that you teach. </p> 							
                        </div>
                    </div>
                </div>
                <div class="row">
				<?php 
				$tempCounter = 0 ; 
				
				if (is_object ($arr1) ) {
				while ( $row = $arr1->fetch_assoc()  ) {
					if ($tempCounter %2 == 0) {
					?>
                    <div class="col-md-6 col-sm-12 wow fadeInLeft">
                        <div class="media">
                            <a class="pull-left">
                                <img src="img/icons/monitor.png" class="media-object" alt="Monitor">
                            </a>
                            <div class="media-body">
                                <h3><?php echo $row["name"] ?></h3>
								<p> <?php echo $row["level_name"]  ?> </p>
								<p> <?php echo $row["grade"] ?> </p>								
                               
                            </div>
                        </div>

                    </div>
					<?php } else  {?>
                    <div class="col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="media">
                            <a  class="pull-left">
                                <img src="img/icons/cog.png" alt="Cog">
                            </a>
                            <div class="media-body">
                              <h3><?php echo $row["name"] ?></h3>
								<p> <?php echo $row["level_name"]  ?> </p>
								<p> <?php echo $row["grade"]  ?> </p>		
                               
                            </div>
                        </div>
                        
                    </div>
				   <?php }
				   $tempCounter++ ;
				   }
				   $arr1 ->close () ;			
				   }
else echo 'no courses' ;				   
				  
				  ?>

                </div> <!-- end .row -->
            </div> <!-- end .container -->
        </section>
        <!--
        End #service
        ========================== -->

        <!--
        #service-bottom
        ========================== -->
        
       
        <!--
        End #service-bottom
        ========================== -->


        <!--
        #Portfolio
        ========================== -->
        
        <section id="portfolio">

            <div class="section-title text-center wow fadeInDown">
                <h2>Assignments</h2>    
                <p>Here you can post and view Assignments.</p>
            </div>
            
            <nav class="project-filter clearfix text-center wow fadeInLeft"  data-wow-delay="0.5s">
               
            </nav>
			
			
 

           <div id="projects" class="clearfix">
		   
		    <div class="col-md-8 col-sm-9 wow fadeInLeft">
                        <div class="contact-form clearfix">
                            <form action="insertAssignment.php" method="post">
                                <h2> Post An Assignment<br><br> </h2>
                                <div class="input-field">
                                    <input type="text" class="form-control" name="courseC" placeholder="Course Code" required="">
                                </div>
								
								 <div class="input-field">
                                    <input type="text" class="form-control" name="courseN" placeholder="Course name" required="">
                                </div>
								
								 <div class="input-field">
                                  Post Date : <br><br> <input type="date" class="form-control" name="postDate"  required="">
                                </div>
								
								 <div class="input-field">
                                 Due Date : <br><br>  <input type="date" class="form-control" name="dueDate"  required="">
                                </div>
								
                                <div class="input-field message">
                                    <textarea name="content" class="form-control" placeholder="Write the Assignment here " required=""></textarea>
                                </div>
                                <input type="submit" class="btn btn-blue pull-right" value="POST Assignment" id="msg-submit"> 
                            </form> <br>
                        </div> <!-- end .contact-form -->
                    </div> <!-- .col-md-8 -->
					
		   
		
                </div>
				<br>
				<br>
				
				
				
          </section>
		
	 <section >
            <div class="container" style = "width:100%">
			<div>
			<?php 
			$prevAssignment = 0 ; 
			$booleanbb = 0 ;
				
			 $arr2 = $mysqli->query($ViewListOfAssignment) ; 
			if (is_object ($arr2) ) {    
				while ( $row = $arr2->fetch_assoc()   ) { 
                if ($booleanbb == 0||$prevAssignment != $row["assignment_iD"] ) {
					if($booleanbb!=0)
						echo '  </ul>'  ; 
			?>
								<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" style = "width:100%" >
                        <div class="pricing-table text-center" >
                            <div class="price" >
							<?php ?>
                                <span class="plan">Assignment</span>
                                <span class="value"><strong><?php echo $row["assignment_iD"] ;  ?> </strong></span>
                            </div>
                            <ul class="text-center" style = "width:60%">
                                <form action="gradeAssignment.php" method="post"> <li>Student id : <?php echo  $row["iD"];  ?>  <div class ="input-field" ><input name="AID" value = "<?php echo  $row["assignment_iD"] ; ?>" style = " visibility: hidden" > <input name="SID" value = " <?php echo  $row["iD"];  ?>" style = " visibility: hidden" > 
								</div> <span> <?php echo  'Solution : '.$row["solution"]  ; ?> </span> <br>  
								<div class="input-field">
                                    <input type="number" class="form-control" name="grade" placeholder="Grade" required=""> </div>
									<br>
									<br> 
									
									<div class="input-field">
									<input type="submit" class="btn btn-blue pull-right" value="POST Grade" id="msg-submit"> <br> <br> <br>  </li> </div> </form>
                                

                            

                              
                          
                            
                        </div>
                    </div>
			
				<?php $booleanbb ++ ; } 
else {
	?>
                           <form action="gradeAssignment.php" method="post"> <li>Student id : <?php echo  $row["iD"];  ?>  <div class ="input-field" ><input name="AID" value = "<?php echo  $row["assignment_iD"] ; ?>" style = " visibility: hidden" > <input name="SID" value = " <?php echo  $row["iD"];  ?>" style = " visibility: hidden" > 
								</div> <span> <?php echo  'Solution : '.$row["solution"]  ; ?> </span> <br>  
								<div class="input-field">
                                    <input type="number" class="form-control" name="grade" placeholder="Grade" required=""> </div>
									<br>
									<br> 
									
									<div class="input-field">
									<input type="submit" class="btn btn-blue pull-right" value="POST Grade" id="msg-submit"> <br> <br> <br>  </li> </div> </form>

			<?php }	$prevAssignment=$row["assignment_iD"] ;  }  $arr2 -> close () ; }else echo 'no courses' ;		?>
             </div>                     
            </div>
        </section>
		
		 <section >
            <div class="container">
                    
                
            </div>
        </section>
		
        <!--
        End #Portfolio
        ========================== -->

        <!--
        #about
        ========================== -->
        <section id="about">
            <div class="container">
                <div class="row">

                    <div class="section-title text-center wow fadeInUp">
					
                        <h2>Questions</h2>    
                        <p>Here you can view and answer questions.</p>
                    </div>
					
                     

                </div>
            </div>
        </section>
        <!--
        End #about
        ========================== -->
        

      
		

        <!--
        #about-us
        ========================== -->
        <section id="about-us">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-5 col-md-offset-1 wow fadeInLeft">

                        <div class="subtitle text-center">
                            <h3>Questions asked by some Students </h3>
                        </div>

                        <div id="testimonial">

                      <?php
					  $xxxx= 0 ; 
					 
					  $arr4 = $mysqli->query($ViewListOfQuestions) ;  
					  if (is_object ($arr4) ) {						
					while ( $row = $arr4->fetch_assoc())
					  {
					  ?> 
                              <?php if ($xxxx%2 == 0 ) { ?>
                            <div class="tst-item">
                                <div class="tst-single clearfix">
                                    <img src="img/client/3.jpg" alt="Client" class="img-circle">
                                    <div class="tst-content">
                                        <p><?php echo 'Question ID : '.$row["question_iD"].'  | '.$row ["question"]   ; ?> </p>
                                        <span><?php echo $row["cname"].'|'.$row["ccode"] .' | '. $row["Name"]  ; ?> </span>
                                    </div>
                                </div>
							  <?php } else { ?> 
                                <div class="tst-single clearfix">
                                    <img src="img/client/1.jpg" alt="Client" class="img-circle">
                                    <div class="tst-content">
                                       <p><?php echo 'Question ID : '.$row["question_iD"].'  | '.$row ["question"]   ; ?> </p>
                                        <span><?php echo $row["cname"].'|'.$row["ccode"] .' | '.$row["Name"]  ; ?> </span>
                                    </div>
                                </div>
                            </div>
							  <?php } $xxxx++; 
					  } 
					  $arr4->close() ; 
					  }?>
                         

                        </div> <!-- end #testimonial -->
						<br><br>
                    </div> <!-- end .col-md-5 -->

                    <div class="col-md-5 col-md-offset-1 wow fadeInRight" style = "width :75%">

                        <div class="subtitle text-center">
                          
                        <div class="contact-form clearfix">
                            <form action="answerQuestion.php" method="post">
                                
                                <div class="input-field">
                                    <input type="number" class="form-control" name="id" placeholder="question ID " required="">
                                </div>
								 <div class="input-field">
                                    <input type="text" class="form-control" name="courseC" placeholder="Course Code" required="">
                                </div>
								
								 <div class="input-field">
                                    <input type="text" class="form-control" name="courseN" placeholder="Course name" required="">
                                </div>
								
                                <div class="input-field message">
                                    <textarea name="answer" class="form-control" placeholder="Answer the question here " required=""></textarea>
                                </div>
                                <input type="submit" class="btn btn-blue pull-right" value="Answer" id="msg-submit">
                            </form>
                        </div> <!-- end .contact-form -->
                   <!-- .col-md-8 -->
                        </div>

                        <div class="progress-bars">
                            
                            

                        </div>  <!-- progress-bars -->

                    </div>  <!-- end .col-md-5 -->

                </div>
            </div>
        </section>
        <!--
        End #about-us
        ========================== -->

        <!--
        #quotes
        ========================== -->
        <section id="quotes">
            <div class="container">
                <div class="row wow zoomIn">
                    <div class="col-lg-12">
                        <div class="call-to-action text-center">
                            <p>“Those who educate children well are more to be honored than they who produce them; for these only gave them life, those the art of living well.”</p>
                            <span>Aristotle</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--
        End #quotes
        ========================== -->

        <!--
        #pricing
        ========================== -->
		
        <section id="pricing">
            <div class="container">
                <div class="row">

                    <div class="section-title text-center wow fadeInUp">
                        <h2>Students</h2>    
                        <p>Here you can view your students </p>
                    </div>
					<?php $previousgrade=0 ;
					$bebe = 0 ; 
				
					 $arr3 = $mysqli->query($ViewListOfStudentsTaughtByTeacher) ; 
					if (is_object ($arr3) )	{					
					while ( $row = $arr3->fetch_assoc()){ 
						if ($bebe== 0 ) {
							$bebe = $row["grade"] ; 
							
						
				?>
								<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp">
                        <div class="pricing-table text-center">
                            <div class="price">
							<?php 
							
                                echo '<span class="plan"> Grade </span>' ; 
                                echo '<span class="value"><strong>'.$row["grade"].'</strong></span> </div>' ; 
								echo ' <ul class="text-center">'  ; 
								
								$previousgrade = $row["grade"] ; 
						?> 
                           <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp">
                        <div class="pricing-table text-center">
                            <div class="price">
							<?php 
							
                               
								
									 echo'<li>'.$row["Name"].'</li>' ;  
								 
						?> 
                           
							<?php 
						} else if ($previousgrade == $row["grade"] ){
                                echo'<li>'.$row["Name"].'</li>' ; 
                                ?>
                            
                            
                        </div>
                    </div>
					<?php 	} 
                      else {
	                            ?>
								
								 	<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp">
                        <div class="pricing-table text-center">
                            <div class="price">
							<?php 
							
                                echo ' </ul> <span class="plan"> Grade </span>' ; 
                                echo '<span class="value"><strong>'.$row["grade"].'</strong></span> </div>' ; 
									echo ' <ul class="text-center">'  ; 
									 echo'<li>'.$row["Name"].'</li>' ;  
								 
						?> 
						
					<?php } 	$previousgrade = $row["grade"] ; 	} 	$arr3 -> close () ;  }?>
					   </ul>
				

                   
                </div>
                <div class="row">
                    <div class="col-md-12 wow fadeInUp">
                       
                    </div>
                </div>
            </div>
        </section>
        <!--
        End #pricing
        ========================== -->




        <!--
        #contact
        ========================== -->
        <section id="contact">
            <div class="container">
                <div class="row">

                    <div class="section-title text-center wow fadeInDown">
                        <h2>Reports</h2>
                        <p>Here you can write reports about a student in a specific course.</p>
                    </div>
                    
                    <div class="col-md-8 col-sm-9 wow fadeInLeft">
                        <div class="contact-form clearfix">
                            <form action="writeReport.php" method="post">
                                <div class="input-field">
                                    <input type="number" class="form-control" name="id" placeholder="Student's ID" required="">
                                </div>
								<div class="input-field">
                                    <input type="date" class="form-control" name="date"  required="">
                                </div>
                                <div class="input-field message">
                                    <textarea name="content" class="form-control" placeholder="Write the report details here " required=""></textarea>
                                </div>
                                <input type="submit" class="btn btn-blue pull-right" value="POST REPORT" id="msg-submit">
                            </form>
                        </div> <!-- end .contact-form -->
                    </div> <!-- .col-md-8 -->

                   
<!-- 
                        <div class="contact-details">
                            <span>GET IN TOUCH</span>
                            <p>+00 123.456.789 <br> <br> +00 123.456.789</p>
                        </div> end .contact-details -->
                    </div> <!-- .col-md-4 -->

                </div>
            </div>
        </section>
        <!--
        End #contact
        ========================== -->

        <!--
        #footer
        ========================== -->
        <footer id="footer" class="text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="footer-logo wow fadeInDown">
                            <img src="img/logo.png" alt="logo">
                        </div>

                       

                        <div class="copyright">
                            <p>Developed by <a href="https://www.facebook.com/Seif.hossam.1996">Seif El-Din Hussam</a></p> <br> 
							 <a target="_blank" href=" http://localhost/MS4/bs-twopage/index.php">HOMEPAGE</a>
							
                        </div>

                    </div>
                </div>
            </div>
        </footer>
        <!--
        End #footer
        ========================== -->


        <!--
        JavaScripts
        ========================== -->
        
        <!-- main jQuery -->
        <script src="js/vendor/jquery-1.11.1.min.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        <!-- jquery.nav -->
        <script src="js/jquery.nav.js"></script>
        <!-- Portfolio Filtering -->
        <script src="js/jquery.mixitup.min.js"></script>
        <!-- Fancybox -->
        <script src="js/jquery.fancybox.pack.js"></script>
        <!-- Parallax sections -->
        <script src="js/jquery.parallax-1.1.3.js"></script>
        <!-- jQuery Appear -->
        <script src="js/jquery.appear.js"></script>
        <!-- countTo -->
        <script src="js/jquery-countTo.js"></script>
        <!-- owl carousel -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- WOW script -->
        <script src="js/wow.min.js"></script>
        <!-- theme custom scripts -->
        <script src="js/main.js"></script>
    </body>
</html>
