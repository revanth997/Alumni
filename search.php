<!--
<body>

<form action="" method="post">

  <input name="search" type="search" autofocus><input type="submit" name="button">

</form>

<table>
  <tr><td><b>Name</td><td></td><td><b>Status</td></tr>
-->
<?php

$con=mysqli_connect('127.0.0.1:3306', 'root', 'alumni','Alumni');
#$con=mysqli_connect('localhost', 'root', '','Alumni');


if(isset($_POST['search'])){    //trigger button click

  $search=$_POST['search'];

  $query=mysqli_query($con,"select * from  where name like '%{$search}%' || status like '%{$search}%' ");

if (mysqli_num_rows($query) < 0) {
	#echo "not found";
	echo '<script language="javascript">';
	echo 'alert("no results found")';
}
else{
	while ($row = mysqli_fetch_array($query))
    echo  "<tr><td>".$row['name']."</td><td></td><td>".$row['status']."</td></tr>";
  }

}

mysqli_close();
?>
