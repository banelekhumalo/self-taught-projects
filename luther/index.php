<?php
session_start();
require 'dbconfig/config.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body style="background-color:#7f8c8d">
   <div id="main-wrapper">
    <center><h1>Banele App</h1>
     <h2>Login Form</h2>
     <img src="img/banele.jpg" class="banele"/>
      </center>

    <form class="myform"action="index.php" method="post">
        <label><b>Username</b></label><br>
        <input name="username" type="text" class="inputvalues" placeholder="username"/><br>
          <label><b>Password</b></label><br>
        <input name="password" type="password" class="inputvalues" placeholder="passsword"/><br>
        <input name="login" type="submit" id="login_btn" value="login"/><br>
        <a href="register.php"><input type="button" id="register_btn" value="register"/></a>      
    </form>
    
    <?php
       if(isset($_POST['login']))
       {
           $username=$_POST['username'];
           $password=$_POST['password'];
           
           $query="select * from userinfotb WHERE username='$username' AND password='$password'";
           $query_run=mysqli_query($conn, $query);
           
           if(mysqli_num_rows($query_run)>0)
           {
              //valid 
               $_SESSION['username']=$username;
               header('location:homepage.php');
           }
           else
           {
                echo'<script type="text/javascript">alert("invalid user credetials!")</script> '; 
           }
           
           
       }
       ?>
    
    </div>
</body>
</html>