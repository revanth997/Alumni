<?php 
        session_start();
#       $con = mysqli_connect("127.0.0.1:3306","root","","Alumni") or die("Could not connect");
      $con = mysqli_connect("127.0.0.1:3306","root","alumni","Alumni") or die("Could not connect");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Alumni: Contactus</title>

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
                <li ><a href="events.php">Events</a></li>
                <li><a href="gallery.php">Gallery</a></li>                                           
                <li class="active"><a href="contact.php">Contact us</a></li>
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
  
    <!--=========== BEGIN GOOGLE MAP SECTION ================-->
    
    <h2 class="title_two">How to reach us? </h2>
    <section id="googleMap">
      <iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21356.098640188276!2d77.91918960662944!3d18.87551933350253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7b3ac798c9449f79!2sRajiv+Gandhi+University+of+Knowledge+Technologies!5e0!3m2!1sen!2sin!4v1489487963897" frameborder="1" style="border:0" allowfullscreen></iframe>
    </section>
    <!--=========== END GOOGLE MAP SECTION ================-->
    
     <!--=========== BEGIN CONTACT SECTION ================-->
    <section id="contact">
      <div class="container">
       <div class="row">
          <div class="col-lg-12 col-md-12"> 
            <div class="title_area">
              <h2 class="title_two">IIIT Basar </h2>
              <span></span> 
              <p>The primary objective of establishing RGU-IIIT was to provide high quality educational opportunities for the aimed rural youth of Telangana. The initial goal was that at least the top 1 % of the rural graduates would be given the opportunity to study at RGU-IIIT.</p>
            </div>
          </div>
       </div>
<?php
//   session_start();  
// #    $con= mysqli_connect("127.0.0.1","root","","Alumni")or die("Could not connect");
//       $con= mysqli_connect("127.0.0.1","root","alumni","Alumni")or die("Could not connect");
    if(isset($_POST['check']))
    {
        if(isset($_SESSION['user'])) $user = $_SESSION['user'];
        else $user=NULL;
        $name = $_POST['name'];
        $mail = $_POST['mail'];
        $sub = $_POST['subject'];
        $fback = $_POST['feedback'];
        if($res=mysqli_query($con,"INSERT INTO contactus VALUES ('$user','$name','$mail','$sub','$fback',CURRENT_TIMESTAMP);"))
        {       
           //header('location:contact.php');
           
           echo '<h4>Submitted</h4>';
        }   
        else echo"error"; 
    }
?>


       <div class="row">
         <div class="col-lg-8 col-md-8 col-sm-8">
           <div class="contact_form wow fadeInLeft">
              <form class="submitphoto_form" action="" method="post">
                <input type="text" class="wp-form-control wpcf7-text" placeholder="Your name" name="name" required>
                <input type="email" class="wp-form-control wpcf7-email" placeholder="Email address" name="mail" pattern="[a-zA-Z]+([\._]?\w+)*@[a-zA-Z]+([\._]?\w+)*(\.[a-zA-Z]{2,3})+$" required>          
                <input type="text" class="wp-form-control wpcf7-text" placeholder="Subject" name="subject" required>
                <textarea class="wp-form-control wpcf7-textarea" cols="30" rows="10" placeholder="What would you like to tell us" name="feedback" required></textarea>
                <input type="submit" value="Submit" class="wpcf7-submit" name="check">
              </form>
           </div>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-4">
           <div class="contact_address wow fadeInRight">
             <h3>Address</h3>
             <div class="address_group">
               <p>IIIT - Basar</p>
               <p>Phone: 08752 243344</p>
               <p>Nirmal,Telangana - 504107</p>
               <p>Email: enquires@rgukt.ac.in</p>
             </div>
            </div>
         </div>
       </div>
      </div>
    </section>
    <!--=========== END CONTACT SECTION ================-->

    
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
