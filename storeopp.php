<?php
	session_start();	
#    $con= mysqli_connect("127.0.0.1","root","","Alumni")or die("Could not connect");
      $con= mysqli_connect("127.0.0.1","root","alumni","Alumni")or die("Could not connect");
    $user = $_SESSION['user'];
    $name = $_POST['name'];
    $desc = $_POST['desc'];
    if(isset($_POST['link']))  $link = $_POST['link'];
    else $link='';
    $res = mysqli_query($con,"SELECT MAX(oid) AS max FROM opportunity");
    $row=mysqli_fetch_assoc($res);
    if($row['max']==NULL)     $id=1;
    else $id=$row['max']+1;
    if($res=mysqli_query($con,"INSERT INTO opportunity VALUES ('$id','$name','$desc','$link',CURRENT_TIMESTAMP);"))
    {       
       header('location:opportunities.php');
    }   
    else echo"error"; 
?>
