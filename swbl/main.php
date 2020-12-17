<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SWBL A PIC login and signup</title>
        <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
 <style>
     body{
         overflow-x: hidden;
     }
     #centered1{
         position: absolute;
         font-size: 10vw;
         top: 30%;
         left: 30%;
         transform:  translate(-50%,-50%);
     }
        #centered2{
         position: absolute;
         font-size: 10vw;
         top: 50%;
         left: 40%;
         transform:  translate(-50%,-50%);
     }
      #centered3{
         position: absolute;
         font-size: 10vw;
         top: 70%;
         left: 30%;
         transform:  translate(-50%,-50%);
     }
     #signup{
         width: 60%;
         border-radius: 30px;
         padding-bottom: 10px;
     }
      #login{
          padding-top: 10px;
         width: 60%;
          background-color: #fff;
         border-radius: 30px;
          border: 1px solid #1da1f2;
          color: #1daf2;
     }
     #login:hover{
         width:  60%;;
         background-color: #fff;
         color: #1da1f2;
         border: 2px solid #1da1f2; 
         border-radius: 30px;
          
          
     }
     .well{
         background-color: #187FAB;
     }
     
</style>
<body>
    <div class="row">
       <div class="col-sm-12" >
          <div class="well">
             <center>
              <h1 style="color:white">SBWL A PIC</h1>   
             </center>    
          </div>        
       </div>      
    </div>
    
    <div class="row">
        <div class="col-sm-6" style="left:0.5%;">
           <img src="images/swbl.jpg" class="img-rounded" title="SBWL A PIC" width="630px" height="565px">
           <div id="centered1" class="centered"><h3 style="color:white;"><span class="glyphicon glyphicon-search"></span>&nbsp&nbsp<strong>Follow Your Interests.</strong></h3></div>
           <div id="centered2" class="centered"><h3 style="color:red;"><span class="glyphicon glyphicon-search"></span>&nbsp&nbsp<strong>Hear what people talk about.</strong></h3></div>
          <div id="centered3" class="centered"><h3 style="color:yellow;"><span class="glyphicon glyphicon-search"></span>&nbsp&nbsp<strong>Join the conversation.</strong></h3></div>   
        </div>
        
        <div class="col-sm-6" style="left:15px:">
           <img src="images/swbl2.PNG" class="img-rounded" title="SBWL A PIC" width="100px" height="100px">
           <br>
           <br>
            <h2><strong>See what is happening in<br> the world right now</strong></h2>            <h2><strong>Join SWBL A Pic Today</strong></h2>
            <form method="post" action="">
               <button id="signup" class="btn btn-info btn-lg" name="signup">Sign up</button><br><br>
               <?php
                    if(isset($_POST['signup']))
                    {
                        echo"<script>window.open('signup.php','_self')</script>";
                    }

                ?>
               
                <button id="login" class="btn btn-ifno btn-lg" name="login">Login</button>
                 <?php
                    if(isset($_POST['login']))
                    {
                        echo"<script>window.open('signin.php','_self')</script>";
                    }

                ?>
           </form>

        </div>
        
    </div>
</body>
</html>