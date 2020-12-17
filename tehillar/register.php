<?php
require 'dbconfig/config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Page</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-colour:#7f8c8d">
    <div id="main-wrapper">
       <center>
          <h2>Tehillah Music Generation</h2>
           <h2>Register Form</h2>
           <img src="img/pic1.jpg" class="pic1"/>           
       </center>
       <form class="myform" action="register.php" method="post">
             <label><b>First Name:</b></label><br>
         <input name="user_first"type="text" class="inputvalues" placeholder="Enter your firstname" required/><br>
             <label><b>Last Name:</b></label><br>
         <input name="user_last"type="text" class="inputvalues" placeholder="Enter your lastname"required/><br>
                <label><b>Email:</b></label><br>
         <input name="user_email" type="text" class="inputvalues" placeholder="Enter your email"required/><br>
          <label><b>Username:</b></label><br>
         <input name="user_uid"type="text" class="inputvalues" placeholder="Enter your username"required/><br>
            <label><b>Password</b></label><br>
         <input name="user_pwd" type="password" class="inputvalues" placeholder="Enter your password"required/><br>
            <label><b>Repeat Password:</b></label><br>
         <input name="user_pwd2" type="password" class="inputvalues" placeholder="Confirm your password"required/><br>
         
         <input name="submit_btn" type="submit" id="signup_btn" value="Sign up"><br>
           <a href="register.php"><input name="back_btn" type="submit" id="back_btn" value="back"></a>
       </form>
     <?php
       if(isset($_POST['submit_btn']))
       {
           $user_first=$_POST['user_first'];
           $user_last=$_POST['user_last'];
           $user_email=$_POST['user_email'];
           $user_uid=$_POST['user_uid'];
           $user_pwd=$_POST['user_pwd'];
            $user_pwd2=$_POST['user_pwd2'];
           
           if($user_pwd==$user_pwd2)
           {
               $query="select * from user WHERE user_uid='$user_uid'";
               $query_run=mysqli_query($conn, $query);
               $result=mysqli_num_rows($query_run);
               if($result>0)
               {
                   echo'<script type="text/javascript">alert("User already exists! Try anotherone")</script>';
               }
               else
               {
                   $query="insert into user (user_first, user_last, user_email, user_uid, user_pwd) values('$user_first','$user_last','$user_email','$user_uid','$user_pwd')";
                    $query_run=mysqli_query($conn, $query);
                   if($query_run)
                   {
                       echo'<script type="text/javascript">alert("User registered, please to to login page")</script>';
                   }
                  
               }
           }
           else
           {
               echo'<script type="text/javascript">alert("fill the information correct and Password do not match")</script>';
           }

       }
        ?>
    </body>
</html>
