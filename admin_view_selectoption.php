<?php
   // session_start();
   // include("php/config.php");
   // if(isset($_POST['std_en'])){
   //   $en = $_POST['std_en'];
   //   $sql = mysqli_query($conn,"SELECT * FROM login WHERE en_roll = $en");
   //   $row = $sql->fetch_assoc();
   
   //   if($row['studentName'] == ""){
   //     header("Location: ./passout_student.php");
   //   }
   // }
   ?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
         .dropdown-submenu {
         position: relative;
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
         include("include/admin_header.php");
         ?> 
   </head>
   <body>
      <br><br><br><br><br><br><br><br><br><br>
      <table align="center" rowspan="10" colspan="10"  style="width: 400px;">
         <tr>
            <!-- <button align="Right"><a href="../logout.php">Logout</a></button> -->
            <th>
            </th>
         </tr>
      </table>
      <table align="center" rowspan="10" colspan="10"  style="width: 150px;">
         <tr>
            <td>
               <!-- <h1><?php echo $_SESSION['studentName'] = $row['studentName']; ?></h1> -->
            </td>
         </tr>
         <tr>
            <th><br><br><br><br><br><br>
            <div class="dropdown">
                  <button type="button" data-toggle="dropdown" class="dropbtn">Select</Sect>
                  <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                     <li><a tabindex="-1" href="admin_view.php">Intenship</a></li>
                     <li><a tabindex="-1" href="admin_view_mooc.php">MOOC</a></li>
                     <li class="dropdown-submenu">
                        <a class="test" tabindex="-1" href="#">Awards/Achievements<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                           <li class="dropdown-submenu">
                              <a class="test" tabindex="-1" href="#">Co Curricular<span class="caret"></span></a>
                                 <ul class="dropdown-menu">
                                    <li><a tabindex="-1" href="admin_view_research.php">Research/Innovation</a></li>
                                    <li><a tabindex="-1" href="admin_view_technical.php">Technical Activities</a></li>
                                 </ul>
                           </li>
                        
                           <li class="dropdown-submenu">
                              <a class="test" tabindex="-1" href="#">Extra Curricular<span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                 <li><a tabindex="-1" href="admin_view_sports.php">Sports/Cultural</a></li>
                                 <li><a tabindex="-1" href="admin_view_extension.php">Extension Activities</a></li>
                              </ul>
                           </li>
                        </ul>

                     </li>
                     
                     
                  
                  </ul>
               </div>
               <!-- <div class="dropdown">
                  <button class="dropbtn">Select</button>
                  <div class="dropdown-content">
                     <a href="admin_view.php">Intenship</a>
                     <a href="admin_view_mooc.php">MOOC</a>
                     <a href="admin_view_awards.php">Awards/Achievements</a>
                     <a href="">Extra Curricular</a>
                     <a href="admin_view_sports.php">Sports/Cultural</a>
                     <a href="admin_view_extension.php">Extension Activities</a>
                     <a href="">Co Curricular</a>
                     <a href="admin_view_research.php">Research/Innovation</a>
                     <a href="admin_view_technical.php">Technical Activities</a>
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