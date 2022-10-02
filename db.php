<?php
try{
	$con=new PDO("mysql:host=localhost;dbname=college","root","");}
	catch(PDOExection $e){
	echo $e->getMessage();
}
?>