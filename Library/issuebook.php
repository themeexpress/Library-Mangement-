<?php 
error_reporting(E_PARSE | E_ERROR);
session_start(); 
$username=$_SESSION['username'];

  require 'newcon.php';
  //$idnew=0;
  $idnew =$_GET['id'];
  $currentdate=date("Y-m-d");
  $select= mysql_query("select * from booklist where id = '$idnew'");
  $row=mysql_fetch_array($select);
  $isbn=$row['ISBN'];

   $sql=mysql_query("INSERT INTO borrowers (username, date_of_taken,isbn)
      values('$username','$currentdate','$isbn')");

      
if($sql) {
echo 'Your Book is booked. Please collect from Library';
		}

else {
	
  echo 'Unexpected error Your Book is not booked! Try Again!';

 } 

?>
<a href="bookrequest.php">Go Back</a>