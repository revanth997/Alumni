<?php
session_start();	
 //   $con = mysqli_connect("127.0.0.1:3306","root","","Alumni") or die("Could not connect");
#    if(isset($_POST['login']))
#    {
#      $user = $_POST['uname'];
#      $pwd = $_POST['passwd'];
#	if (!$con)
#	{
#	  echo "Failed to connect to MySQL: ";
#	}

#         $res = mysqli_query($con,"SELECT * FROM register where username='$user'"); // and passwd='$pwd'");
#        $fetch = mysqli_num_rows($res);
#	if($fetch==1)
#		{
#			$_SESSION['user'] =$user;
#		}
#		else
#		{
#			echo "failed";
#			session_destroy();
#			echo '<script language="javascript">';
#			echo 'alert("username or pwd wrong")';
#		}
#    }		
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Login|Signup</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="img/head.png"/>

    <!-- CSS
    ================================================== -->       
    <!-- Bootstrap css file-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Superslide css file-->
    <link rel="stylesheet" href="css/superslides.css">
    <!-- Slick slider css file -->
    <link href="css/slick.css" rel="stylesheet"> 
    <!-- Circle counter cdn css file -->
    <link rel='stylesheet prefetch' href='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/css/jquery.circliful.css'>  
    <!-- smooth animate css file -->
    <link rel="stylesheet" href="css/animate.css"> 
    <!-- preloader -->
    <link rel="stylesheet" href="css/queryLoader.css" type="text/css" />
    <!-- gallery slider css -->
    <link type="text/css" media="all" rel="stylesheet" href="css/jquery.tosrus.all.css" />    
    <!-- Default Theme css file -->
    <link id="switcher" href="css/themes/default-theme.css" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/loginstyle.css">
   
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>   
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
 
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
              <a class="navbar-brand" href="index.php">RGUKT<span> Alumni</span></a>             
              <!-- IMG BASED LOGO  -->
                       
                     
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                <li ><a href="index.php">Home</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Connect<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="Alumni.php">Alumni</a></li>
                    <li><a href="Faculty.php">Faculty</a></li>               
                  </ul>
                </li>   
                <li><a href="blog.php">Blog</a></li>
                <li><a href="opportunities.php">Opportunities</a></li>
                <li><a href="events.php">Events</a></li>
                <li><a href="gallery.php">Gallery</a></li>                                           
                <li><a href="contact.php">Contact us</a></li>
<!--                <li><a href="login.php">Login</a></li>             -->

<?php
	if(isset($_SESSION['user']))
		echo '<li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-              expanded="false">'.$_SESSION['user'].'<span class="caret"></span></a>
		          <ul class="dropdown-menu" role="menu">
		            <li><a href="logout.php">logout</a></li>
		            <li><a href="#">Profile</a></li>               
		          </ul>
		     </li>';
		else	echo '<li class = active><a href="login.php">Login</a></li> ';
?>
	
              </ul>           
            </div><!--/.nav-collapse -->
<!--       </div>     -->
        </nav>  
      </div>
      <!-- END MENU -->    
    </header>
    <!--=========== END HEADER SECTION ================--> 
    
  <div class="cotn_principal">
  	
<div class="cont_centrar">

  <div class="cont_login">
<div class="cont_info_log_sign_up">
      <div class="col_md_login">
<div class="cont_ba_opcitiy">
        
        <h2>LOGIN</h2>  
  <p> </p> 
  <button class="btn_login" onclick="cambiar_login()">LOGIN</button>
  </div>
  </div>
<div class="col_md_sign_up">
<div class="cont_ba_opcitiy">
  <h2>SIGN UP</h2>

  
  <p> </p>

  <button class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button>
</div>
  </div>
       </div>

    
    <div class="cont_back_info">
       <div class="cont_img_back_grey">
       <img src="img/loginback.jpg" alt="" />
       </div>
       
    </div>
	<div class="cont_forms" >
    <div class="cont_img_back_">
       <img src="img/loginback.jpg" alt="" />
       </div>
       
 <form  action="verify.php" method="post">
 <div class="cont_form_login">
      <a href="#" onclick="ocultar_login_sign_up()" ><i class="material-icons">&#xE5C4;</i></a>
         <h2>LOGIN</h2>
      <input type="text" name="uname" placeholder="Username" required />
      <input type="password" name="passwd" placeholder="Password" required />
      <!--<button class="btn_login" onclick="cambiar_login()">LOGIN</button>-->
      <button class="btn_login" type="submit"  name="login">LOGIN</button>

  </div>
  </form>  
  
   <form action="register.php" method="post">
   <div class="cont_form_sign_up">        
      <a href="#" onclick="ocultar_login_sign_up()"><i class="material-icons">&#xE5C4;</i></a>
           <h2>SIGN UP</h2>
      <input type="text" name ="uname" placeholder="User Name" required />
<!--      pattern="/^B(08|09|10|11|12|13|14|15|16)[0-9]{4}$/"/>   -->
      <input type="text" name='name' placeholder="Name" required />
      <input type="password" name="passwd" placeholder="Password" required />
      <input type="email" name="mail" placeholder="Email" required />
      <input type="text" name="phone" placeholder="Phone" pattern="/^[0-9]*{10}$/" required />
      <button class="btn_sign_up" onclick="cambiar_sign_up()" name="signup" >SIGN UP</button>
<?php
if(isset($_POST['signup']))      
      if($_SESSION['success']) 
       echo '<script>
           	  alert("Signup successful, please login to continue");
           	</script>';
      else
      echo '<script>
        	  alert("Username already exists");
        	</script>';
?>      
      
    </div>
    </form>

    </div>
    
  </div>
 </div>
</div>
      
    <script src="js/loginindex.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/queryloader2.min.js" type="text/javascript"></script> 
    <script src="js/wow.min.js"></script>  
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.animate-enhanced.min.js"></script>
    <script src="js/jquery.superslides.min.js" type="text/javascript" charset="utf-8"></script>   
    <script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
    <script type="text/javascript" language="javascript" src="jss/jquery.tosrus.min.all.js"></script>   
    <script src="js/custom.js"></script>
</body>
</html>
