<?php

$con=mysql_connect('localhost', 'root', 'alumni');
$db=mysql_select_db('Alumni');


if(isset($_POST['search'])){    //trigger button click

  $search=$_POST['search'];

  $query=mysql_query("select * from  where name like '%{$search}%' || status like '%{$search}%' ");

if (mysql_num_rows($query) < 0) {
	#echo "not found";
	echo '<script language="javascript">';
	echo 'alert("no results found")';
}
else{
	while ($row = mysql_fetch_array($query))
    echo  "<tr><td>".$row['name']."</td><td></td><td>".$row['status']."</td></tr>";
  }

}

mysql_close();
?>
