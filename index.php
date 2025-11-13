<?php
session_start();
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="login/fonts/icomoon/style.css">
    <link rel="stylesheet" href="login/css/owl.carousel.min.css">
    <link rel="stylesheet" href="login/css/bootstrap.min.css">
    <link rel="stylesheet" href="login/css/style.css">

    <title>Welcome to School Managment System</title>
    <?php 
    include('dbconection.php');
    ?>
  </head>
  <body>
   

  <div class="half">
    <div class="bg order-1 order-md-2" style="background-image: url('PGcentre.jpg');"></div>
    <!--div class="bg order-1 order-md-2" style="background-image: url('login/images/bg_1.jpg');"></div!-->
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center" >
          <div class="col-md-5" >
             
            <div class="form-block" style="border-radius: 15px; border: solid #305D7D">
              <div class="text-center mb-5">
              <h3 style="color: #fb771a"> <strong style="color: #2A6B99">School System</strong></h3>
              <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
              </div>
              <form  method="post">
                <div class="form-group first">
                  <label for="username"><b>Username</b></label>
                  <input type="email" name="email1" required class="form-control" style="border:solid 1.5px; border-color:#fb771a " placeholder="abc@gmail.com" id="username">
                </div>
                <div class="form-group last mb-3">
                  <label for="password"><b>Password</b></label>
                  <input type="password" required name="pass" class="form-control" style="border:solid 1.5px; border-color:#fb771a " placeholder="Your Password" id="password">
                </div>
                
                <div class="d-sm-flex mb-5 align-items-center">
                  
                  
                </div>
                 <input type="submit" name="btn" value="Log In" class="btn btn-block btn-primary" >
                <!--input type="submit" value="Log In"  class="btn btn-block btn-primary"!-->
                 <div class="d-sm-flex mb-5 align-items-center"> 
                  
                  <span class="ml-auto"><br/><br/>Power By:<b style="color: #2A6B99">Sindh Soft</b></span>
                </div>

              </form>
              <?php
                  if(isset($_POST['btn'])){
                  $q=mysqli_query($conn,"SELECT * FROM user_login WHERE email='".$_POST['email1']."' and password='".$_POST['pass']."' and is_active=1");
                  $row=mysqli_fetch_array($q);
                  
                  if($row>0){
               
                $_SESSION['userid']=$row['user_id'];
                  if($row['emp_id']==1){ // admin
                 ?>
                 <script type="text/javascript">
                   window.location="admin/dashboard.php";
                 </script>
                 <?php
                    }
                    else if($row['emp_id']=2){//teacher account    
                        
                      ?>
                      <script type="text/javascript">
                        window.location="account/dashboard.php";
                      </script>
                      <?php
                    
                   
                    }
                    }
                    else{
                      echo "<h1>Try Again</h1>";
                    }
                  }
                 ?>
               
            </div> 
          </div>
        </div>
      </div>
    </div>
    
  </div>
    <script src="login/js/jquery-3.3.1.min.js"></script>
    <script src="login/js/popper.min.js"></script>
    <script src="login/js/bootstrap.min.js"></script>
    <script src="login/js/main.js"></script>
  </body>
</html>