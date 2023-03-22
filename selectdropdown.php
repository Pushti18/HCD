<?php
   session_start();
   include("php/config.php");
   
   ?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Student's Section</title>
      <?php
         include("include/main.php");
         ?> 
      <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
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
         .dropbtn {
         background-color: white;
         color: black;
         padding: 16px;
         font-size: 16px;
         border: none;
         align: center;
         }
         .dropdown {
         position: relative;
         display: inline-block;
         }
         .dropdown-content {
         display: none;
         position: absolute;
         background-color: #f1f1f1;
         min-width: 160px;
         box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
         z-index: 1;
         align: center;
         }
         .dropdown-content a {
         color: black;
         padding: 12px 16px;
         text-decoration: none;
         display: block;
         }
         .dropdown-content a:hover {background-color:  yellow;}
         .dropdown:hover .dropdown-content {display: block;}
         .dropdown:hover .dropbtn {background-color: yellow;}
      </style>
      <?php
         include("include/simple_header.php");
         ?> 
   </head>
   <body>
      <br><br><br><br><br><br><br><br><br><br>
      <table align="center" rowspan="10" colspan="10"  style="width: 400px;">
         <tr>
            <!-- <button align="Right"><a href="../logout.php">Logout</a></button> -->
            <th>
               <?php
                  $id = $_SESSION['student_id'];
                      $result = $conn->query("SELECT studentName,email_id FROM login Where id = $id");
                      $row = $result->fetch_assoc();
                      ?>
               <h3 class="fs-4 fw-bold">
                  <?php echo $row['studentName']; ?>
               </h3>
            </th>
         </tr>
      </table>
      <table align="center" rowspan="10" colspan="10"  style="width: 150px;">
         <tr>
            <th>
               <div class="dropdown">
                  <button class="dropbtn">Select</button>
                  <div class="dropdown-content">
                     <a href="demo.php">Intenship</a>
                     <a href="mooc.php">MOOC</a>
                     <a href="awards.php">Awards/Achievements</a>
                  </div>
                  </button>
            </th>
            </div>
         </tr>
      </table>
   </body>
</html>