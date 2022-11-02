<!DOCTYPE html>
<html lang="en">
<head>
    <title>Wellcome</title>
</head>
<body>
<?php
    session_start();
    if(isset($_SESSION['User']))
    {
        echo ' Wellcome ' . $_SESSION['User'].'<br/>';
        echo '<a href="logout.php?logout">Logout</a>';
    }
    else
    {
        header("location: welcome.php");
    }
?>
</body>
</html>
