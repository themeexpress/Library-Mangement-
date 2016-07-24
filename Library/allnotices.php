<?php
session_start();  
?>     
<?php include('adminheader.php');?>
    <div class="row">
     <?php include('adminmenu.php'); ?>
      <div class="col-md-10">
        <p class="welcome">Welcome &nbsp;&nbsp;<span style="color:#2484A4;"> <?php echo $_SESSION['username']; ?>  </span></p>
        <?php $username=$_SESSION['username'];   ?>
       
<br/>
<br/>

            <p>All Notices</p>
            <table class="table-hover" cellpadding="2" cellspacing="2" border="2">
              <tr>
                <th>Title</th>    
                <th>Notice</th>
                <th>Date of Publish</th>           
                <th>Action</th>                
              </tr>
              <?php
               require 'newcon.php';   //include connection
                $data = mysql_query("SELECT * FROM notice ORDER BY date_of_publish DESC");  //mysql query for All Notices           
                     if($data === FALSE) { 
                     die(mysql_error()); // TODO: better error handling
                     }
               while($row = mysql_fetch_array($data)) {?>
              <tr>
                <?php $id = $row['id']; ?>
                <td><?php echo  $row['title'];?></td>
                <td><?PHP echo  $row['notice']; ?></td>               
                <td><?PHP echo  $row['date_of_publish'];?></td>                
                <td>
                  <a href="deletenotice.php?id=<?php echo $id; ?>">Delete</a>                   
                </td>
                
              </tr>
              <?php } ?>
            </table>
            <p class="margintopbottom"></p>
        
      </div>
    </div>
    
  </div> 
  
 <?php include('footer.php');?>
