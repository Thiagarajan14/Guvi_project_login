<?php
    $con=mysqli_connect('localhost','root','','college');
    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
?>