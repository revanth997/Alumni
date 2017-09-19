<?php
	session_start();	
    $con= mysqli_connect("127.0.0.1","root","alumni","Alumni")or die("Could not connect");
#    $con= mysqli_connect("127.0.0.1","root","","Alumni")or die("Could not connect");
    $user = $_SESSION['user'];
    $na = $_POST['ename'];
    $des = $_POST['description'];
    $ven = $_POST['venue'];
    $date=$_POST['date'];
    $time=$_POST['time'];
    $res = mysqli_query($con,"SELECT MAX(eid) AS max FROM events");
    $row=mysqli_fetch_assoc($res);
    if($row['max']==NULL)     $id=1;
    else $id=$row['max']+1;
    if($res=mysqli_query($con,"INSERT INTO events VALUES ('$id','$na','$des','$ven','$date','$time');"))
    {       
       header('location:events.php');
    }   
    else echo"error"; 
?>
