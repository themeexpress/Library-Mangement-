<?php 
require 'newcon.php';

$name=$_POST['name'];
$stid=$_POST['st_id'];
$dept= $_POST['dept'];
$session=$_POST['session'];
$email=$_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$select=mysql_query("select * from registration");
  $row=mysql_fetch_array($select);
  $user=$row['username'];
  if ($user==$_POST['username'])
  {
  	echo "User name is Already Taken";
  }
  else{
  	$stmt=mysql_query("insert into registration(name, st_id, dept, session, email, username, password) 
		values('$name','$stid','$dept','$session','$email','$username','$password')");
	header('location:index.php');
		
}

?>