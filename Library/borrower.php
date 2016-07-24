<?php
session_start();  
?>     
<?php include('adminheader.php');?>
    <div class="row">
     <?php include('adminmenu.php'); ?>
      <div class="col-md-10">
        <p class="welcome">Welcome &nbsp;&nbsp;<span style="color:#2484A4;"> <?php echo $_SESSION['username']; ?>  </span></p>
        <?php $username=$_SESSION['username'];   ?>


       <p>Borrowers List -Student</p>
        <table class="table-hover" cellpadding="2" cellspacing="2" border="2">
              <tr>
                <th>Name</th>    
                <th>Student ID</th>
                <th>Department</th>
                <th>Session</th>
                <th>Email</th>
                <th>Username</th>
                <th>Data of Taken</th> 
                <th>Fine(TK)</th>                             
                <th>Action</th>                
              </tr>
              
              <?php
              $date = date("Y-m-d");
              //echo $date;
               require 'newcon.php';   //include connection               
                $data = mysql_query("SELECT registration.id, registration.name, registration.st_id, registration.dept, registration.session, registration.email, registration.username,  
                   borrowers.date_of_taken FROM borrowers, registration
                  WHERE borrowers.username = registration.username");  //mysql query for student borrowers           
                     if($data === FALSE) { 
                     die(mysql_error()); // TODO: better error handling
                     }
               while($row = mysql_fetch_array($data)) {?>
              <tr>
                <?php $id = $row['id']; ?>
                <td><?php echo  $row['name'];?></td>
                <td><?PHP echo  $row['st_id']; ?></td> 
                <td><?php echo  $row['dept'];?></td>
                <td><?PHP echo  $row['session']; ?></td>                
                <td><?PHP echo  $row['email']; ?></td>
                <td><?PHP echo  $row['username'];?></td>
                <?PHP  $takendate=$row['date_of_taken'];?>
                <td><?PHP echo  $row['date_of_taken'];?></td>
                <td><?php $date1=date_create($date);
                $date2=date_create($takendate);
                $diff=date_diff($date1,$date2);
                $t= $diff->format("%a");//calculating fine
                $tt=($t-21)/7;
                echo  (int)$tt*5;

                  ?></td>

                <td>
                  <a href="deletestudents.php?id=<?php echo $id ?>">Delete</a> |                   
                  <a href="st_mknotice.php?id=<?php echo $id ?>">Make Notice</a> 
                </td>
                
              </tr>
              <?php } ?>
            </table>
<br/>
<br/>

            <p>Borrowers List -Teachers</p>
            <table class="table-hover" cellpadding="2" cellspacing="2" border="2">
              <tr>
                <th>Name</th>    
                <th>Designation</th>
                <th>Department</th>               
                <th>Email</th>
                <th>Username</th>
                <th>Data of Taken</th>
                <th>Fine(TK)</th>                                 
                <th>Action</th>                
              </tr>
              <?php
               require 'newcon.php';   //include connection
                $data = mysql_query("SELECT te_registration.id, te_registration.name, te_registration.name, te_registration.designation, te_registration.dept, te_registration.email, te_registration.username, 
                        borrowers.date_of_taken FROM borrowers, te_registration
                        WHERE borrowers.username = te_registration.username");  //mysql query for student borrowers           
                     if($data === FALSE) { 
                     die(mysql_error()); // TODO: better error handling
                     }
               while($row = mysql_fetch_array($data)) {?>
              <tr>
                <?php $id = $row['id']; ?>
                <td><?php echo  $row['name'];?></td>
                <td><?PHP echo  $row['designation']; ?></td> 
                <td><?php echo  $row['dept'];?></td>                               
                <td><?PHP echo  $row['email']; ?></td>
                <td><?PHP echo  $row['username'];?></td>
                <?PHP  $takendate=$row['date_of_taken'];?>
                <td><?PHP echo  $row['date_of_taken'];?></td>
                <td><?php $date1=date_create($date);
                $date2=date_create($takendate);
                $diff=date_diff($date1,$date2);
                $t= $diff->format("%a");//calculating fine
                $tt=($t-21)/7;
                echo  (int)$tt*5;

                  ?></td>                                
                <td>
                  <a href="deleteteachers.php?id=<?php echo $id; ?>">Delete</a> | 
                  <a href="te_mknotice.php?id=<?php echo $id ?>">Make Notice</a>  
                </td>
                
              </tr>
              <?php } ?>
            </table>
            <p class="margintopbottom"></p>


      <!--
        <form class="form-horizontal" role="form" action="st_insert.php" method="POST">          
              <div class="form-group">
                <label class="control-label col-sm-2" for="name">Name:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
                </div>
              </div>         
                                         
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default" name="submit">Submit</button>
                </div>
              </div>
         </form>       
        -->
        
      </div>
    </div>
    
  </div> 
  
 <?php include('footer.php');?>
