<?php
include("includes/connection.php");

    if(isset($_POST['sign_up']))
    {
         $first_name=htmlentities(mysqli_real_escape_string($conn,$_POST['first_name']));
         $last_name=htmlentities(mysqli_real_escape_string($conn,$_POST['last_name']));
         $pass=htmlentities(mysqli_real_escape_string($conn,$_POST['u_pass']));
         $email=htmlentities(mysqli_real_escape_string($conn,$_POST['u_email']));
         $country=htmlentities(mysqli_real_escape_string($conn,$_POST['u_country']));
         $gender=htmlentities(mysqli_real_escape_string($conn,$_POST['u_gender']));
         $birthday=htmlentities(mysqli_real_escape_string($conn,$_POST['u_birthday']));
         $status = "verified";
         $posts="no";
         $newgid = sprintf('%05d', rand(0,999999));
         $username = strtolower($first_name . "_" . $last_name . "_" . $newgid);
        
         $check_username_query =  "select user_name from users where user_email='$email'";
         $run_username = mysqli_query($conn,$check_username_query);
        
            if(strlen($pass) <9)
            {
                echo"<script>alert('Password should be minimun of nine characters')</script>";
                exit();
            }
            else 
            {
                $check_email = "select * from users where user_email='$email'";
                $run_email = mysqli_query($conn,$check_email);
                $check = mysqli_num_rows($run_email);
                    if($check == 1)
                    {
                         echo"<script>alert('Email alreaddy exists, Please try another email!')</script>";
                        echo"<script>window.open('signup.php','_self')</script>";

                    }
                else
                {
                $rand = rand(1,3);
                    if($rand ==1)
                    {
                        $profile_pic="users/pic1.jpg";
                    }
                     else if($rand ==2)
                     {
                         $profile_pic="users/pic2.png";
                     }
                      else if($rand ==3)
                      {
                           $profile_pic="users/pic3.jpg";
                      }


                    $insert = "insert into users (f_name,l_name, user_name,describle_user,relationship, user_pass,user_email,user_country, user_gender,user_birthday, user_image, user_cover,user_reg_date,status,posts,recovery_account)
                    values('$first_name','$last_name','$username','Hello SWBL A PIC','..','$pass','$email','$country','$gender','$birthday','$profile_pic','default_cover.jpg', NOW(),'$status','$posts','BaneleCongtas,')";

                    $query= mysqli_query($conn,$insert);

                    if($query)
                    {
                        echo "<script>alert('Well done $first_name, you are good to go')</script>";
                        echo "<script>window.open('signin.php','_self')</script>";
                    }
                    else
                    {
                        echo "<script>alert('Registration failed, please try again')</script>";
                        echo "<script>window.open('signup.php','_self')</script>"; 
                        
                    }
                }
            }
    }

?>
