<?php
require_once('connection.php'); 
/*$dbhost = 'localhost:3036';
   $dbuser = 'root';
   $dbpass = '';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);*/
   if (isset($_POST['name']))    
{    
         $name=$_POST['name']; 
} 
$st_id=$_POST['st_id'];
$dept=$_POST['dept'];
$session=$_POST['session'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];


   $sql="INSERT INTO registration (name,st_id,dept,session,email,username,password) values ('$name','$st_id','$dept','$session','$email','$username','$password')";
       
    $insert = mysql_query($sql);
   
   if(! $insert )
   {
      die('Could not enter data: ' . mysql_error());
   }
   
   echo "Entered data successfully\n";   
   

?>