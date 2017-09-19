<?php 
        session_start();
//       $con = mysqli_connect("127.0.0.1:3306","root","","Alumni") or die("Could not connect");
      $con = mysqli_connect("127.0.0.1:3306","root","alumni","Alumni") or die("Could not connect");
?>
<!DOCTYPE html>
<html lang="en">
      <style>
		.cont_login {
				  position: relative;
				  width: 500px;
				left: 50%;
				margin-top:-10px;
				margin-left: 280px;
				  
				}
			.col_md_login {
				background-color:white;
			  border:2px;
			  border-color:black;
			  position: relative;
			  float: left;
			  width: 50%;
			}
				.cont_info_log_sign_up {
				background-color:white;
				position: absolute;
				  width: 550px;
				  height: 280px;
				  top: 100px;
				z-index: 1;
				} 
				.cont_ba_opcitiy {
					  position: relative;
					  background-color:white;
					  width: 350px;
					  border-radius:3px ;
					 margin-top: 60px;
					 padding: 15px 0px;
					}
				
	</style>
  <head>
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Alumni:Events</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="img/head.png"/>

 
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/superslides.css">
    <link href="css/slick.css" rel="stylesheet"> 
    <link rel='stylesheet prefetch' href='css/jquery.circliful.css'>  
    <link rel="stylesheet" href="css/animate.css"> 
    <link rel="stylesheet" href="css/queryLoader.css" type="text/css" />
    <link type="text/css" media="all" rel="stylesheet" href="css/jquery.tosrus.all.css" />    
    <link id="switcher" href="css/themes/default-theme.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
   
    <link href="css/fontmerri.css" rel='stylesheet' type='text/css'>   
    <link href="css/fontvarela.css" rel='stylesheet' type='text/css'> 
    <link href="css/event.css" rel="stylesheet">
 
  </head>
  <body>    

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->

    <!--=========== BEGIN HEADER SECTION ================-->
    <header id="header">
      <!-- BEGIN MENU -->
      <div class="menu_area">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">  <div class="container">
            <div class="navbar-header">
              <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
              <a class="navbar-brandimg" href="index.php"><img src="img/rguktlogo.png" alt="logo"></a>      
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- LOGO -->
              <!-- TEXT BASED LOGO -->
                  <a class="navbar-brand" href="index.php">RGUKT<span>&nbsp;Alumni</span></a>                
              <!-- IMG BASED LOGO  -->
                       
                     
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                <li ><a href="index.php">Home</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Connect<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="Alumni.php">Alumni</a></li>
                    <li><a href="Faculty.php">Faculty</a></li>               
                  </ul>
                </li>             
                <li><a href="opportunities.php">Opportunities</a></li>
                <li class="active"><a href="events.php">Events</a></li>
                <li><a href="gallery.php">Gallery</a></li>                                           
                <li><a href="contact.php">Contact us</a></li>
<?php
		
	if(isset($_SESSION['user']))
		echo '<li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-              expanded="false">'.$_SESSION['user'].'<span class="caret"></span></a>
		          <ul class="dropdown-menu" role="menu">
		            <li><a href="logout.php">logout</a></li>
		          </ul>
		     </li>';
		else echo '<li><a href="login.php">Login</a></li> ';
?>
              </ul>           
            </div><!--/.nav-collapse -->
          </div>     
        </nav>  
      </div>
      <!-- END MENU -->    
    </header>
    <!--=========== END HEADER SECTION ================-->     
    <!--=========== BEGIN COURSE BANNER SECTION ================-->

    <section id="courseArchive">
    <br/>
    <br/>
<?php
	
 		 $num_rec_page = 4;
                  $page = 1;
                 if(isset($_GET["page"])) {$page=$_GET["page"];}
                  $start_from = ($page-1)*$num_rec_page;
                  $res = mysqli_query($con, "select * from events order by time desc LIMIT $start_from, $num_rec_page");
         	while ($row = mysqli_fetch_assoc($res)) 
         	{  
      echo '<div class="container">
        <div class="row">
          <!-- start course content -->
          <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="courseArchive_content">
              <!-- start blog archive  -->
              <div class="row">
                <!-- start single blog archive -->
                <div class="col-lg-12 col-12 col-sm-12">
                  <div class="single_blog_archive wow fadeInUp">';
                 
		        echo' </div>
		            <h2 class="blog_title"><a href="events.php">'.$row['name'].'</a></h2>
		            <div class="blog_commentbox">
		              <p>On '.$row['date'].', <i class="fa fa-clock-o"></i>'. $row['time'].'</p>
		              <p><i class="fa fa-map-marker"></i>Location : '.$row['venue'].'</p>                      
		            </div>
		            <p class="blog_summary">'.$row['description'].'</p>
		          </div>';
		}
?>
                </div>

                <!-- End single blog archive -->

              <!-- start previous & next button -->
              <?php
                  $res1 = mysqli_query($con,"select * from questions");
                  $tot_rec = mysqli_num_rows($res1);
                  $tot_pages = ceil($tot_rec/$num_rec_page);
                  if($page == 1) 
                  	$prev = $page;
                  else
                  	$prev = $page-1;
                  if($page == $tot_pages) 
                  	$next= $page;
                  else
                  	$next = $page+1;               
          ?>
              <div class="single_blog_prevnext">
		 <ul class="pagination pagination-lg">
	<?php          
    	  echo '<li><a href="events.php?page='.$prev.'" class="prev_post wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;"><i class="fa fa-angle-left"></i>Previous</a></li>';
		 for ($i=1; $i <= $tot_pages ; $i++) 
                  { 
                  	if($i == $page)
                    	      echo '<li class="active"><a href="events.php?page='.$i.'">'.$i.'</a></li>';
                        else
                    	      echo '<li><a href="events.php?page='.$i.'">'.$i.'</a></li>';
                  }
              echo  '<li><a href="events.php?page='.$next.'" class="next_post wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;">Next<i class="fa fa-angle-right"></i></a></li>';
?>
		</ul>
              </div>
            </div>
          </div>
          <!-- End course content -->        
    </section>
    
    
<div class="cont_centrar">
 <div class="cont_login">
		<div class="cont_info_log_sign_up">
		      <div class="col_md_login">
					<div class="cont_ba_opcitiy">
					  
					  <h2>Schedule Event</h2>  
					  <p>  </p>
					  <p>  </p>
					  <p>  </p>
 						 <button class="btn_login" onclick="cambiar_login()">Schedule</button>
					  </div>
				  </div>
               </div>

	<div class="cont_forms" >
    <div class="cont_img_back_">
       </div>
 <form action="storeevent.php" method="POST">
 <div class="cont_form_login">

<a href="#" onclick="ocultar_login_sign_up()" ><i class="fa fa-angle-left"></i></a>
   <h2>Event Details</h2>
    
	 <input type="text" placeholder="  Event Name" name="ename" required/>
	<input type="text" placeholder="  Description" name="description" required/>
	<input type="text" placeholder="  Location" name= "venue" required/>
	<input type="date" placeholder="  YYYY-MM-DD" name= "date" pattern="^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$" required/>
	<input type="text" placeholder="  HH(:MM) AM/PM" name= "time" pattern="(0?[1-9]|1[0-2])(:[0-5][0-9])? (am|AM)|(pm|PM)$" required/>
	
  <?php 
              if(!isset($_SESSION['user'])) echo '<script>alert("Login to schedule event")</script>' ;
                // header('location:login.php');
              //else echo '<input class="post" type="submit" value="Post" name="post">';
              else echo'<button class="btn_login" onclick="cambiar_login()">Schedule</button>';
  ?> 
  
     </form>
  </div>
  </form>
  
   <div class="cont_form_sign_up">
<a href="#" onclick="ocultar_login_sign_up()"><i class="material-icons">&#xE5C4;</i></a>
     <h2>SIGN UP</h2>

  </div>

    </div>
    
  </div>
 </div    
    
    
    <!--=========== END COURSE BANNER SECTION ================-->
 
     
    <!--=========== BEGIN FOOTER SECTION ================-->
    <footer id="footer">
      <!-- Start footer top area -->
      <div class="footer_top">
        <div class="container">
          <div class="row">
            <div class="col-ld-3  col-md-3 col-sm-3">
              <div class="single_footer_widget">
                <h3>About Us</h3>
                <p>The primary objective of establishing RGU-IIIT was to provide high quality educational opportunities for the aimed rural youth of Telangana. The initial goal was that at least the top 1 % of the rural graduates would be given the opportunity to study at RGU-IIIT. Thus RGUKT, as a green field university, represents a unique experiment in the educational area.</p>
              </div>
            </div>
            <div class="col-ld-3  col-md-3 col-sm-3">
              <div class="single_footer_widget">
                <h3>Others sites</h3>
                <ul class="footer_widget_nav">
                  <li><a href="https://www.rgukt.ac.in" target="_blank">RGUKT Basar</a></li>
                  <li><a href="https://hub.rgukt.ac.in/" target="_blank">Hub</a></li>                  
                </ul>
              </div>
            </div>
            <div class="col-ld-3  col-md-3 col-sm-3">
              <div class="single_footer_widget">
                <h3>Social Links</h3>
                <ul class="footer_social">
                  <li><a data-toggle="tooltip" data-placement="top" title="Facebook" class="soc_tooltip" href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Twitter" class="soc_tooltip"  href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Google+" class="soc_tooltip"  href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Linkedin" class="soc_tooltip"  href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Youtube" class="soc_tooltip"  href="#"><i class="fa fa-youtube"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End footer top area -->

      <!-- Start footer bottom area -->
      <div class="footer_bottom">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="footer_bootomLeft">
                <p> Copyright &copy; IIIT Basar</p>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="footer_bootomRight">
               <p>Designed by Alumni-Team</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End footer bottom area -->
    </footer>
    <!--=========== END FOOTER SECTION ================--> 

    <!-- Javascript Files
    ================================================== -->

   <script src="js/loginindex.js"></script>

   <script src="js/jquery.min.js"></script>
    <script src="js/jqmin.js"></script>
    <script src="js/queryloader2.min.js" type="text/javascript"></script>
    <script src="js/wow.min.js"></script>  
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.animate-enhanced.min.js"></script>
    <script src="js/jquery.superslides.min.js" type="text/javascript" charset="utf-8"></script>   
    <script src="js/jqcirc.js"></script>
    <script type="text/javascript" language="javascript" src="js/jquery.tosrus.min.all.js"></script>   
    <script src="js/custom.js"></script>
  </body>
</html>
