<?php
  $server="localhost";
  $user="root";
  $password="";
  $db="book_hotel";

  $conn= new mysqli($server,$user,$password,$db);

  if($conn->connect_error)
  	die("connnection failed:" .$conn->connect_error);

  //echo"connected with database";
  ?>