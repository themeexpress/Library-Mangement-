
  <?php 
session_start();   
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Library Management System</title>
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/mystyle.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body> 
<div class="container">
  <header class="header">
    <nav class="navbar navbar-default">
      <div class="container-fluid"> 
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand" href="#">LIBRARY</a> </div>
        
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">                   
            
          </ul>
        </div>
        <!-- /.navbar-collapse --> 
      </div>
      <!-- /.container-fluid --> 
    </nav>
  </header>
  </div>
  <div class="container">

    <div class="row">
      <div class="col-md-12 slider"> <img class="img-responsive" src="images/Lib.jpg"/> </div>
    </div>
    <div class="row">
      <?php include ('temenu.php');?>
      <div class="col-md-10">
        <p class="welcome">Welcome <span style="color:#2484A4;"> <?php echo $_SESSION['username'];    ?>  </span></p>
        <?php $username=$_SESSION['username'];   ?>
       
            <table cellpadding="2" cellspacing="2" border="2" class="table table-bordered">
              <tr>
                <th>Name</th>    
                <th>Designation</th>
                <th>Department</th>            
                <th>Email</th>
                <th>Username</th>
                <th>Option</th>
              </tr>
              <?php
               require 'newcon.php';   //include connection
                $data = mysql_query("Select * from te_registration where username = '$username'");  //mysql query for specific username            
                     if($data === FALSE) { 
    die(mysql_error()); // TODO: better error handling
}
               while($row = mysql_fetch_array($data)) {?>
              <tr>
                <?php $id = $row['id']; ?>
                <td><?php echo  $row['name'];?></td>
                <td><?php echo  $row['designation'];?></td>                  
                <td><?php echo  $row['dept'];?></td>                               
                <td><?PHP echo  $row['email']; ?></td>
                <td><?PHP echo  $row['username'];?></td>
                <td>                 
                 <a href="teupdatetest.php?id=<?php echo $id; ?>">Update</a>               
                </td>
                
              </tr>
              <?php } ?>
  
</table>
        
      </div>
    </div>

    
  </div> 
  
 <?php include('footer.php');?>
