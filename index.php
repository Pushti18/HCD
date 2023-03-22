<?php   
   session_start(); //to ensure you are using same session
   // session_destroy(); //destroy the session
   // header("location:/index.php"); //to redirect back to "index.php" after logging out
   // exit();
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Student's Corner</title>
      <?php include 'include/main.php'; ?> 
      <style>
         body  
         {  
         width: 100%;
         height: 100vh;
         position: relative;
         background: linear-gradient(90deg, rgba(2,0,30,1) 0%, rgb(115 215 235) 0%, rgb(122 220 241) 0%, rgb(154 223 237) 100%);
         /* background: url("assets/img/ThankYou!.jpg") top center; */
         background-size: cover;
         position: relative;
         font-family: "Open Sans", sans-serif;
         /* background: url("../img/img1.jpg") top center; */
         margin: 0;  
         padding: 0;  
         /* font-family: 'Arial';   */
         }  
         a.nav-link{
         font-family: "Open Sans", sans-serif;
         }
         #back{
         width: 100%;
         height: 100vh;
         position: relative;
         background: linear-gradient(90deg, rgba(2,0,30,1) 0%, rgb(115 215 235) 0%, rgb(122 220 241) 0%, rgb(154 223 237) 100%);
         /* background: url("assets/img/ThankYou!.jpg") top center; */
         background-size: cover;
         position: relative;
         }
      </style>
      <?php
         include("include/simple_header.php");
         ?>
      <?php
         include("include/main.php");
         ?>
      <section id="back" class="d-flex align-items-center">
         <div class="container position-relative">
            <div class="row justify-content-center">
               <div class="col-xl-7 col-lg-9 text-center">
                  <h1>Student's</h1>
                  <h1>Corner</h1>
               </div>
            </div>
            <div class="text-center">
               <!-- <button type="button" class="btn btn-primary">Register</button> -->
               <a href="login.php" class="btn-get-started scrollto">Login <i class="fa-solid fa-arrow-right"></i></a>
               <!-- <button align="Right"><a href="logout.php">Logout</a></button> -->
            </div>
         </div>
      </section>
   </head>
   <body>
      <?php include 'include/footer.php'; ?> 
   </body>
</html>