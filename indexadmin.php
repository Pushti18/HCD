<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <link rel="stylesheet" href=
         "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="assets/css/login.css">
      <title>Login Page</title>
      <?php include 'include/main.php'; ?> 
   </head>
   <?php include 'include/admin_header.php'; ?> 
   <style>
      body{
      background: linear-gradient(90deg, rgba(2,0,30,1) 0%, rgb(115 215 235) 0%, rgb(122 220 241) 0%, rgb(154 223 237) 100%);
      }
   </style>
   <body>
      <form action="validate.php" method="post">
         <div class="login-box">
            <h1>Login</h1>
            <div class="textbox">
               <i class="fa fa-user" aria-hidden="true"></i>
               <input type="text" placeholder="Username"
                  name="username" value="">
            </div>
            <div class="textbox">
               <i class="fa fa-lock" aria-hidden="true"></i>
               <input type="password" placeholder="Password"
                  name="password" value="">
            </div>
            <input class="button" type="submit"
               name="login" value="Sign In">
         </div>
      </form>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <?php include 'include/footer.php'; ?> 
   </body>
</html>