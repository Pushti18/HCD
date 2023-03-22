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
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
         .dropdown:hover .dropdown-content {display: block;
            background-color:  yellow;
            width: 120%;
         }
         .dropdown:hover .dropbtn {background-color: yellow;}
         .dropdown-submenu {
         position: relative;
         }

         .dropdown-menu>li>a {
            /* display: none; */
         /* position: absolute; */
         background-color: #f1f1f1;
         min-width: 160px;
         box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
         z-index: 1;
         align: center; 
         font-size: 16px;
            display: block;
            padding: 3px 20px;
            clear: both;
            font-weight: 400;
            line-height: 1.42857143;
            /* color: #333; */
            white-space: nowrap;
         }
                  .dropdown-submenu .dropdown-menu {
         top: 0;
         left: 100%;
         margin-top: -1px;
         }
         .text{
            font-size: 26px;
         }

      </style>
      <?php
         include("include/simple_header.php");
         ?> 
   </head>
   <body>
      <br><br><br><br><br><br><br><br><br><br>
      <table align="center" rowspan="10" colspan="10"  style="width: 400px;" >
         <tr>
            <!-- <button align="Right"><a href="../logout.php">Logout</a></button> -->
            <th>
               <?php
                  $id = $_SESSION['student_id'];
                      $result = $conn->query("SELECT studentName,email_id FROM login Where id = $id");
                      $row = $result->fetch_assoc();
                      ?>
               <h3 class="text"><br><br><br>
               &nbsp;&nbsp;<?php echo $row['studentName']; ?>
               </h3>
            </th>
         </tr>
      </table>
      <table align="center" rowspan="10" colspan="10"  style="width: 150px;">
         <tr>
            <th>
               <div class="dropdown">
                  <button type="button" data-toggle="dropdown" class="dropbtn">Awards/Achievenments
                  <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                     <li class="dropdown-submenu">
                        <a class="test" tabindex="-1" href="#">Co Curricular<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                           <li><a tabindex="-1" href="research.php">Research/Innovation</a></li>
                           <li><a tabindex="-1" href="technical.php">Technical Activities</a></li>
                        </ul>
                     </li>
                     <li class="dropdown-submenu">
                        <a class="test" tabindex="-1" href="#">Extra Curricular<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                           <li><a tabindex="-1" href="sports.php">Sports/Cultural</a></li>
                           <li><a tabindex="-1" href="extension.php">Extension Activities</a></li>
                        </ul>
                     </li>
                  </ul>
               </div>
               <!-- <div class="dropdown">
                  <button class="dropbtn">Awards/Achievenments</button>
                  <div class="dropdown-content">
                     <a href="">Extra Curricular</a>
                     <a href="sports.php">Sports/Cultural</a>
                     <a href="extension.php">Extension Activities</a>
                     <a href="">Co Curricular</a>
                     <a href="research.php">Research/Innovation</a>
                     <a href="technical.php">Technical Activities</a>
                  </div>
                  </button>
                  </div> -->
            </th>
         </tr>
      </table>
      <script>
         $(document).ready(function(){
         $('.dropdown-submenu a.test').on("click", function(e){
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
         });
         });
      </script>
   </body>
</html>