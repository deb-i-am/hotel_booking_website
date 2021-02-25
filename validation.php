<?php
session_start();
  $server="localhost";
  $user="root";
  $password="";
  $db="book_hotel";

  $conn=mysqli_connect($server,$user,$password,$db);
  
   if($conn->connect_error)
  	die("connnection failed:" .$conn->connect_error);
    //echo"connected with database";


  $name= $_POST['uname'];
  $pass= $_POST['password'];

  $s= "select * from user where uname= '$name' && password='$pass'";

  $result= mysqli_query($conn,$s);

  $num= mysqli_num_rows($result);

 if(!empty($num))
    {
        session_start();
        $_SESSION['user']=$num;
        header("Location:index.php");    //redirect to dashboard page
    }
  else
  {
    header('location:login.php');
  	
  }

?>