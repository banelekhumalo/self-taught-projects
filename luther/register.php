<?php
require 'dbconfig/config.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register Page</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body style="background-color:#7f8c8d">
   <div id="main-wrapper">
    <center><h1>Banele App</h1>
     <h2>Registration Form</h2>
     <img src="img/banele.jpg" class="banele"/>
      </center>

    <form class="myform"action="register.php" method="post">
            <label><b>Full name</b></label><br>
        <input name="fullname" type="text" class="inputvalues" placeholder="full name"required/><br>
        <label><b>Gender</b></label>
        <input type="radio" class="radiobtns" name="gender" value="male" checked required>Male
        <input type="radio" class="radiobtns" name="gender" value="female" checked required>female<br>
        <label><b>Service Provider:</b></label>
        <select class="network" name="network">
           <option value="mtn">mtn</option>
           <option value="vodacom">vodacom</option>
           <option value="telkom">telkom</option>
           <option value="cellc">cell C</option>
           <option value="other">other</option>
        </select><br>
        <label><b>Username</b></label><br>
        <input name="username" type="text" class="inputvalues" placeholder="username"required/><br>
          <label><b>Password</b></label><br>
        <input name="password" type="password" class="inputvalues" placeholder="passsword" required/><br>
         <label><b>Confirm Password</b></label><br>
        <input name="cpassword" type="password" class="inputvalues" placeholder="Confirm passsword" required/><br>
        <input name="submit_btn" type="submit" id="signup_btn" value="Signup" required/><br>
      <a href="index.php"><input type="button" id="back_btn" value="back"/></a>
    </form>
    
    <?php
       if(isset($_POST['submit_btn']))
       {
           // echo'<script type="text/javascript">alert("Signup button clicked")</script> '; 
           $fullname=$_POST['fullname'];
           $gender=$_POST['gender'];
           $network=$_POST['network'];
           
           $username=$_POST['username'];
            $password=$_POST['password'];
           $cpassword=$_POST['cpassword'];
           
           
           
           if($password==$cpassword)
           {
               $query="select * from userinfotb where username='$username'";
               $query_run=mysqli_query($conn,$query);
               $query_result=mysqli_num_rows($query_run);
               if($query_result>0)
               {
                   echo'<script type="text/javascript">alert("user exists, try another user!")</script> '; 
                   
               }
               else
               {
                   $query="insert into userinfotb values('','$username','$fullname','$gender','$network','$password')";
                   $query_run=mysqli_query($conn,$query);
                   
                   if($query)
                   {
                       echo'<script type="text/javascript">alert("username registered. Please go to login page")</script> '; 
                   }
                   else
                   {
                       echo'<script type="text/javascript">alert("ERROR!")</script> '; 
                   }
               }
           }  else
       {
            echo'<script type="text/javascript">alert("Password does not match")</script> ';
       }

       }
       ?>
    
    
    </div>
</body>
</html>