<?php
sleep(1);
include('db.php');
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

$sql="insert into registration(UName,email,Pass) values('$name','$email','$password')";
$stmt=$con->prepare($sql);
$stmt->execute();
?>