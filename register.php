<?php
      $con=mysqli_connect("127.0.0.1:3306","root","alumni","Alumni");
      if(!$con) echo"Connection established";
      
      $uname=$_POST['uname'];
      $name=$_POST['name'];
      $passwd=$_POST['passwd'];
      $email=$_POST['mail'];
      $mobile=($_POST['phone']);

      $insert = "INSERT INTO register VALUES('$uname','$name','$passwd','$email','$mobile')";
      $result=mysqli_query($con, $insert);
      if($result) 
	{ 
	      $_SESSION['success'] = 1;
	      header('Location:index.php');
#            echo '<script language="javascript">';
#		echo 'alert("signup successfull, please login to continue")';
	     
	}
      else 
      {
            $_SESSION['success'] = 0;
            echo '<script language="javascript">';
		echo 'alert("Error")';
            
#            header('Location:index.php');
      }
#      "Userid already exists";
 ?>

