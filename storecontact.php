<?php
	session_start();	
#    $con= mysqli_connect("127.0.0.1","root","","Alumni")or die("Could not connect");
      $con= mysqli_connect("127.0.0.1","root","alumni","Alumni")or die("Could not connect");
    if(isset($_SESSION['user'])) $user = $_SESSION['user'];
    else $user=NULL;
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $sub = $_POST['subject'];
    $fback = $_POST['feedback'];
    if($res=mysqli_query($con,"INSERT INTO contactus VALUES ('$user','$name','$mail','$sub','$fback');"))
    {       
       header('location:contact.php');
       
       //echo '<script>alert("Submitted")</script>';
    }   
    else echo"error"; 
?>
