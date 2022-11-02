<?php
$link = mysqli_connect('localhost','root','','college');
 if($link === false){
     die("ERROR: Could not connect. " . mysqli_connect_error());
 }
 $sql = "INSERT INTO registration(UName,email,Pass) VALUES (?, ?, ?)";
  if($stmt = mysqli_prepare($link, $sql)){

    mysqli_stmt_bind_param($stmt, "sss", $name, $email, $password);
     $name = $_REQUEST['name'];
     $email = $_REQUEST['email'];
     $password = $_REQUEST['password'];
     
     if(mysqli_stmt_execute($stmt)){
         echo "Records inserted successfully.";
     } else{
         echo "ERROR: Could not execute query: $sql. " . mysqli_error($link);
     }
 } else{
     echo "ERROR: Could not prepare query: $sql. " . mysqli_error($link);
 }
 mysqli_stmt_close($stmt);
 mysqli_close($link);
 ?>