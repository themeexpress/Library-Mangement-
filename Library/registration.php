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

  <script type="text/javascript" src="jquery.min.js"></script>
  <style type="text/css">

        .box{

            padding: 20px;

            display: none;

            margin-top: 20px;

            border: 1px solid #000;
            }   
            .student{display: block;}     

    </style>
  <script type="text/javascript">

    $(document).ready(function(){

        $('input[type="radio"]').click(function(){

            if($(this).attr("value")=="red"){

                $(".box").not(".red").hide();

                $(".red").show();

            }

            if($(this).attr("value")=="green"){

                $(".box").not(".green").hide();

                $(".green").show();

            }

            if($(this).attr("value")=="blue"){

               $(".box").not(".blue").hide();

               $(".blue").show();

            }

        });

    });

    </script>
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
            <li><a href="index.php">Home</a></li>
            <li><a href="#">History</a></li>
            <li><a href="#">Book List</a></li> 
          </ul>
        </div>
        <!-- /.navbar-collapse --> 
      </div>
      <!-- /.container-fluid --> 
    </nav>
  </header>
  </div>
  <div class="container">
    <div>      

       <p><h1>Sign Up As a</h1><label><input type="radio" name="colorRadio" value="red">Student</label>

            <label><input type="radio" name="colorRadio" value="green">Teacher</label></p>             

        </div>
  <div class="red box student">

    <div class="row">
      <div class="col-md-12">
        <h1 class="regheading">Student Registration Form</h1>       

        <form class="form-horizontal" role="form" action="st_insert.php" method="POST">          
              <div class="form-group">
                <label class="control-label col-sm-2" for="name">Name:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" required>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="Student ID">Student ID</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" name="st_id" id="st_id" placeholder="Enter Student ID" required>
                </div>
              </div>
               <div class="form-group">
                  <label class="control-label col-sm-2" for="dept">Select Department</label>
                  <div class="col-sm-10">
                  <select class="form-control" id="dept" name="dept" required>
                    <option value="select">Select Your Department</option>
                    <option value="CSE">Computer Science and Engineering</option>
                    <option value="EEE">Electronics and Electrical Engineering</option>
                    <option value="Civil">Civil Engineering</option>
                    <option value="Mechanical">Mechanical Engineering</option>
                    <option value="Textile Eng">Textile Engineering</option>
                    <option value="English">English</option>
                    <option value="Law">Law and Justice</option>
                    <option value="BBA">Bachelor of Business Administration</option>
                    <option value="MBA">Masters of Business Administration</option>
                  </select>
                  </div>
                </div>
               <div class="form-group">
                <label class="control-label col-sm-2" for="session">Session:</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="session" name="session" placeholder="Enter Session" required>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="email">User Name:</label>
                <div class="col-sm-10">
                  <input type="username" class="form-control" id="username" name="username" placeholder="User Name" required>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Password:</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <div class="checkbox">
                    <label><input type="checkbox"> Remember me</label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default" name="submit">Submit</button>
                </div>
              </div>
         </form>
       </div>
    </div>
  </div><!--End Red box-->
  <div class="green box">
    <div class="row">
      <div class="col-md-12">
        <h1 class="regheading">Teacher Registration Form</h1>       

        <form class="form-horizontal" role="form" action="te_insert.php" method="POST">          
              <div class="form-group">
                <label class="control-label col-sm-2" for="name">Name:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" required>
                </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-sm-2" for="designation">Select Your Designation</label>
                  <div class="col-sm-10">
                  <select class="form-control" id="designation" name="designation" required>
                    <option value="select">Select Your Designation</option>
                    <option value="Lecturer">Lecturer</option>
                    <option value="Assistant Professor">Assistant Professor</option>
                     <option value="Assistant Professor">Associate Professor</option>
                    <option value="Professor">Professor</option>                    
                  </select>
                  </div>
                </div>
              
               <div class="form-group">
                  <label class="control-label col-sm-2" for="dept">Select Department</label>
                  <div class="col-sm-10">
                  <select class="form-control" id="dept" name="dept" required>
                    <option value="select">Select Your Department</option>
                    <option value="CSE">Computer Science and Engineering</option>
                    <option value="EEE">Electronics and Electrical Engineering</option>
                    <option value="Civil">Civil Engineering</option>
                    <option value="Mechanical">Mechanical Engineering</option>
                    <option value="Textile Eng">Textile Engineering</option>
                    <option value="English">English</option>
                    <option value="Law">Law and Justice</option>
                    <option value="BBA">Bachelor of Business Administration</option>
                    <option value="MBA">Masters of Business Administration</option>
                  </select>
                  </div>
                </div>
               
              <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="username">User Name:</label>
                <div class="col-sm-10">
                  <input type="username" class="form-control" id="username" name="username" placeholder="User Name" required>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Password:</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <div class="checkbox">
                    <label><input type="checkbox">Remember me</label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default" name="submit">Submit</button>
                </div>
              </div>
         </form>
       </div>
    </div>
  </div><!--End green box-->  

  </div> 
   <?php include('footer.php');?>