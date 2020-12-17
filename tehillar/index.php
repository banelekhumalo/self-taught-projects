<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-colour:#7f8c8d">
    <div id="main-wrapper">
       <center>
          <h2>Tehillah Music Generation</h2>
           <h2>Login Form</h2>
           <img src="img/pic1.jpg" class="pic1"/>           
       </center>
       <form class="myform" action="index.php" method="post">
          <label><b>Username:</b></label><br>
         <input type="text" class="inputvalues" placeholder="Enter your username"><br>
            <label><b>Password</b></label><br>
         <input type="password" class="inputvalues" placeholder="Enter your password"><br>
         <input type="submit" id="login_btn" value="login"><br>
           <input type="submit" id="register_btn" value="register">
       </form>
      
    </div>
</body>
</html>