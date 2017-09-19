<?php 
        session_start();
//        $con = mysqli_connect("127.0.0.1:3306","root","","Alumni") or die("Could not connect");
            $con = mysqli_connect("127.0.0.1:3306","root","alumni","Alumni") or die("Could not connect");
?>
<!DOCTYPE HTML>
<html>
<head>
	<style>
		#areas{
			margin-left: 20px;
			color:#0288D1;	
		}
		.imgcircle{
			height:250px;
			width: 270px;
	   	 box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			}
			.profilebody
			{
				margin-top: 150px;
			}
			.profimg
			{
				width:280px;
				height:260px;
				float: right;
				margin-top: -250px;
				margin-right:80px;
			}
			.introduce
			{	
				margin-left:80px;
				width: 66.6667%;
			}
			.introduce h2 {
    	 	  margin-top: 40px;
			 text-align: left;
			 margin-bottom: 20px;
			 letter-spacing: 1px;
			 color: #4C5667;
			 font-size: 20px;
			 font-weight: 500;
			}
			.introduce .presonal-inform li b {
				margin-top: -100px;
				 margin-left: 20px;
				 width: 120px;
				 display: inline-block;
				 text-transform: capitalize;
				 color: #0288D1;
				 font-size: 15px;
				 font-weight: 400;
				 font-family: "Roboto",sans-serif;
			}
			.introduce .presonal-inform ul li {
				 width: 50%;
				 float: left;
			}
			.introduce .presonal-inform li {

				 color: #97A0AF;
				 font-size: 14px;
				 font-weight: 400;
				 font-family: "Roboto",sans-serif;

			}
			.introduce .presonal-inform li {
				 margin-bottom: 20px;
			}
	</style>
	<title>Alumnu</title>
    	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Specific Metas
    ================================================== -->
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
                <li><a href="index.php">Home</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Connect<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li class="active"><a href="Alumni.php">Alumni</a></li>
                    <li><a href="Faculty.php">Faculty</a></li>               
                  </ul>
                </li>   
                <li><a href="blog.php">Blog</a></li>
                <li><a href="opportunities.php">Opportunities</a></li>
                <li><a href="events.php">Events</a></li>
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
	<div class="profilebody">
					<div class="introduce">
							 <h2 class="animated fadeIn wow animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                        Personal Details
                        </h2>
							<div class="presonal-inform">
		                   <ul>
		                             <li class="animated fadeIn wow animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
		                                 <b>Name:</b>
		                                 Samit Kumar Pradhan
		                             </li>
		                             <li class="animated fadeIn wow animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
		                                 <b>Job:</b>
		                                 Assistant Professor
		                             </li>
		                             <li class="animated fadeIn wow animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
		                                 <b>Phone:</b>
		                                 8500862608
		                             </li>
		                             <li class="animated fadeIn wow animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
		                                 <b>Date of Birth:</b>
		                                 ---------
		                             </li>
		                             <li class="animated fadeIn wow animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
		                                 <b>Email:</b>
		                                 samitcs@rgukt.in
		                             </li>
		                             <li class="animated fadeIn wow animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
		                                 <b>Address:</b>
		                                 IIIT Basar, Nirmal 504107
		                             </li>
		                             <li class="animated fadeIn wow animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
		                                 <b>Nationality:</b>
		                                 Indian
		                             </li>
		                             <li class="animated fadeIn wow animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
		                                 <b>Languages:</b>
			                              English, Hindi, Odiya
		                             </li>
		                    </ul>
							</div>
						</div>
						<div class="profimg">
						 <img class="imgcircle" src="img/samit.jpg" alt=""/>
						</div>
						<br/><br/>
						<div class="introduce">
							 <h2 class="animated fadeIn wow animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                        Educational Details
                        </h2>
							<div class="presonal-inform">
		                   <ul>
		                   			<li class="animated fadeIn wow animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
		                                 <b>MS</b>
		                                 Computer Science, UOH
		                             </li>
		                             <li class="animated fadeIn wow animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
		                                 <b>B.Tech</b>
		                                 ------
		                             </li>
		                             <li class="animated fadeIn wow animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
		                                 <b>Intermediate:</b>
		                                 ---------
		                             </li>
		                             <li class="animated fadeIn wow animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
		                                 <b>Schooling:</b>
		                                 ---------
		                             </li>		                             
		                    </ul>
							</div>
						</div>
						<br/><br/><br/><br/>
						<div class="introduce">
							 <h2 class="animated fadeIn wow animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                        Areas Interested
                        </h2>
                        <div class="presonal-inform">
		                   <ul>
                            <p id="areas" class="animated fadeIn wow animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
		                                Artificial Intelligence, Machine Learning, Document Image Analysis
									</p>		                                
	                    </ul>
						</div>
					</div>
					<br/><br/><br/><br/><br/><br/>
	</div>	
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
                <p> Copyright &copy; All Rights Reserved</p>
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
	</div>      
      <!-- End footer bottom area -->
    </footer>
    <!--=========== END FOOTER SECTION ================--> 

  

    <!-- Javascript Files
    ================================================== -->

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
