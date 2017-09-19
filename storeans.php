<?php
	session_start();	
    $con= mysqli_connect("127.0.0.1","root","alumni","Alumni")or die("Could not connect");
#    $con= mysqli_connect("127.0.0.1","root","","Alumni")or die("Could not connect");
    $id=$_POST['hide'];
    $user = $_SESSION['user'];
    $ans = $_POST['answer'];
    if($res=mysqli_query($con,"INSERT INTO answers VALUES ('$id','$ans','$user',CURRENT_TIMESTAMP);"))
    {       
       header('location:blog.php');
    }   
    else echo"error"; 
?>
