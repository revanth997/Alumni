<?php
	session_start();	
#    $con= mysqli_connect("127.0.0.1","root","","Alumni")or die("Could not connect");
    $con= mysqli_connect("127.0.0.1","root","alumni","Alumni")or die("Could not connect");
    $user = $_SESSION['user'];
    $que = $_POST['query'];
    $res = mysqli_query($con,"SELECT MAX(qid) AS max FROM questions");
    $row=mysqli_fetch_assoc($res);
    if($row['max']==NULL)     $id=1;
    else $id=$row['max']+1;
    if($res=mysqli_query($con,"INSERT INTO questions VALUES ('$id','$que','$user',CURRENT_TIMESTAMP);"))
    {       
       header('location:blog.php');
    }   
    else echo"error"; 
?>
