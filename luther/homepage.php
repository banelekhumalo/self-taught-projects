<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body style="background-color:#7f8c8d">
   <div id="main-wrapper">
    <center><h1>Banele App</h1>
     <h2>Home Page</h2>
     <h3>WELCOME
      <?php echo $_SESSION['username']?>
      </h3>
     <img src="img/banele.jpg" class="banele"/>
      </center>

    <form class="myform"action="homepage.php" method="post">
        <input name="logout" type="submit" id="logout_btn" value="logout"/><br>
       
    </form>
    
    
    <?php 
    if(isset($_POST['logout']))
    {
        session_destroy();
        header('location:index.php'); 
    }
       ?>
    </div>
</body>
</html>