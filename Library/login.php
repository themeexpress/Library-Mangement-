<?php
session_start();
require 'connection.php';

if(isset($_POST['login'])){
	$username=$_POST['username'];
	$password=$_POST['password'];



	$stmt=$conn->prepare("select * from registration where 'username'=$username and 'password'=$password");

	$stmt->execute();

while($account=$stmt->fetch(PDO::FETCH_OBJ) ){

                           
            
               
                echo $account->username;
                echo $account->password;

               
		}
	

	}

?>