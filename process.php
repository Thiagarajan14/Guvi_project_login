<?php 
require_once('connection.php');
session_start();
    if(isset($_POST['Login']))
    {
       if(empty($_POST['UName']) || empty($_POST['Password']))
       {
            header("location:index.html?");
       }
       else
       {
            $query="select * from registration where UName='".$_POST['UName']."' and Pass='".$_POST['Password']."'";
            $result=mysqli_query($con,$query);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$_POST['UName'];
                header("location:wellcome.php");
            }
            else
            {
                echo "<h1> Login failed. Invalid username or password.</h1>";
            }
       }
    }
    else
    {
        echo 'Not Working Now Guys';
    }

?>