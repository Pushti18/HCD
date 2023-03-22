<!DOCTYPE html>    
<html>
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Student's Section</title>
      <?php
         include("include/main.php");
         ?> 
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
         .login{  
         width: 382px;  
         overflow: hidden;  
         margin: auto;  
         margin: 20 0 0 450px;  
         padding: 80px;  
         border-radius: 15px ;  
         }  
         h2{  
         text-align: center;  
         padding: 20px;  
         }  
         label{  
         font-size: 17px;  
         }  
         span{  
         font-size: 17px;  
         }  
         .styled-table {
         background-color: white;
         /* border-color: black;
         border-radius:50px; */
         color: black;
         /* border-collapse: collapse; */
         /* margin: 25px 0; */
         font-size: 0.9em;
         font-family: sans-serif;
         min-width: 400px;
         box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
         }
      </style>
      <?php
         include("include/simple_header.php");
         ?> 
   </head>
   <body>
      <!-- <h2>Login Yourself</h2><br>  -->
      <br> <br> <br> <br> <br> <br> <br> <br> 
      <div class="mb-3">
         <form method="post" action="php/controller.php">
            <table align="center" rowspan="10" colspan="10"  style="width: 304px;" class="styled-table">
               <tr>
                  <th>
                     <label >Enter Enrollment No :</label>
                     <input type="text" name="enrollment_no" class="form-control" maxlength="11"
                        required>
                  </th>
               </tr>
               <tr>
                  <!-- <a type="submit" class="btn-get-started scrollto">Find <i class="fa-solid fa-magnifying-glass"></i></a> -->
                  <?php
                     if (isset($_SESSION['wrong_enno'])) { ?>
                  <div class="alert alert-danger mt-2" role="alert">
                     Invalid <a href="#" class="alert-link">Enrollment no</a>. Try Again..!
                  </div>
                  <?php } ?>
                  <br><br>
                  <th><br>
                     <button type="submit" class="btn-get-started scrollto border" name="submit" value="submit">Find <i
                        class="fa-solid fa-magnifying-glass"></i></button>
                  </th>
                  <!-- <input class="submit" type="submit" value="submit" name="submit"> -->
               </tr>
            </table>
         </form>
      </div>
      </div>    
   </body>
</html>