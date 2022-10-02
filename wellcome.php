<?php
    session_start();
    if(isset($_SESSION['User']))
    {
        echo ' Well Come ' . $_SESSION['User'].'<br/>';
        echo '<a href="logout.php?logout">Logout</a>';
    }
    else
    {
        header("location:index.html");
    }

?>
    <html>
    <head>
      <title>Success page</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
    
    <div class="p-4 bg-primary text-white text-center">
      <h1>Successfully Logined !!</h1>
      <h2>Welcome !!!</h2>
    </div>
    
    <div class="container mt-5">
          <h2>See the list of data in the Json file</h2>
          <?php include 'json.php';?>
          <h2>See the list of data in the table </h2>
          <?php include 'display.php';?>
    </body>
    </html>
    