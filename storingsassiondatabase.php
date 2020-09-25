<?php 
session_start(); 
//Make sure you have made some session variables in some files. 
 
// Create connection to mysql 
$con=mysqli_connect('localhost', 'username', 'password', 'database_name' ); 
 
$query = "INSERT INTO table_name VALUES ( $_SESSION['anyvariable_1'], $_SESSION['anyvariable_2'],$_SESSION['anyvariable_n'] );" 
 
// running query 
mysqli_query($con,$query); 
 
// closing connection  
mysqli_close($con); 
?> 
