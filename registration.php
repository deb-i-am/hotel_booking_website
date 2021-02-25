<?php
session_start();
  header('location:login.php');

  $server="localhost";
  $user="root";
  $password="";
  $db="book_hotel";

  $conn=new mysqli($server,$user,$password,$db);
  
   if($conn->connect_error)
  	die("connnection failed:" .$conn->connect_error);
    //echo"connected with database";

  $name= $_POST['uname'];
  $pass= $_POST['password'];

  $s= "select * from user where uname = '$name'";

  $result= mysqli_query($conn,$s);

  $num= mysqli_num_rows($result);

  if($num == 1)
  {
  	echo "Username already taken";
  }
  else
  {
  	$reg="insert into user(uname,password) values('$name','$pass')";
  	mysqli_query($conn,$reg);
    
   // echo "Registration Successful!!!";
    
    
  }
  $conn->close();
?>