<?php
   session_start();
   if($_SESSION['enrollment_no'] == false){
     header("Location: index.php");
   }
   include("php/config.php");
   $user_id = $_SESSION['enrollment_no'];
   $studentName = $_SESSION['Name'];
   ?>
<!DOCTYPE html>
<html>
   <head>
      <!-- <title>Intenship Form</title> -->
      <?php include 'include/main.php'; ?> 
      <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
      <script>
         (adsbygoogle = window.adsbygoogle || []).push({
              google_ad_client: "ca-pub-6883622550208397",
              enable_page_level_ads: true
         });
         
      </script>
      <style type="text/css">
         table {
         width: 90%;
         /* border-collapse: collapse; */
         margin-top: 40px;
         margin-bottom: 40px;
         padding:10px;
         border:0;
         box-shadow:0 0 15px 4px rgba(0,0,0,0.5);
         /* border-radius:20px; */
         /* border-color:black; */
         }
         table, th, td {
         border: 1px solid #bbb;
         text-align: left;
         /* border-radius:20px; */
         border-color: black;
         }
         tr:nth-child(even) {
         /* background-color: #f2f2f2; */
         }
         th {
         /* background-color: #ddd; */
         }
         th,td {
         padding: 7px;
         }
         button {
         cursor: pointer;
         }
         /*Initial style sort*/
         .tablemanager th.sorterHeader {
         cursor: pointer;
         }
         .tablemanager th.sorterHeader:after {
         content: " \f0dc";
         font-family: "FontAwesome";
         }
         /*Style sort desc*/
         .tablemanager th.sortingDesc:after {
         content: " \f0dd";
         font-family: "FontAwesome";
         }
         /*Style sort asc*/
         .tablemanager th.sortingAsc:after {
         content: " \f0de";
         font-family: "FontAwesome";
         }
         /*Style disabled*/
         .tablemanager th.disableSort {
         }
         #for_numrows {
         padding: 20px;
         float: left;
         }
         #for_filter_by {
         padding: 20px;
         float: right;
         }
         #pagesControllers {
         display: block;
         text-align: center;
         }
         h1{
         text-transform: uppercase;
         font-weight: 300;
         text-align: center;
         margin-bottom: 15px;
         }
         @import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
         body{
         background: linear-gradient(90deg, rgba(2,0,30,1) 0%, rgb(115 215 235) 0%, rgb(122 220 241) 0%, rgb(154 223 237) 100%);
         /* background: -webkit-linear-gradient(left, #25c481, #25b7c4);
         background: linear-gradient(to right, #25c481, #25b7c4); */
         font-family: 'Roboto', sans-serif;
         }
         section{
         margin: 50px;
         }
         /* for custom scrollbar for webkit browser*/
         ::-webkit-scrollbar {
         width: 6px;
         } 
         ::-webkit-scrollbar-track {
         -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
         } 
         ::-webkit-scrollbar-thumb {
         -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
         }
         (adsbygoogle = window.adsbygoogle || []).push({
         google_ad_client: "ca-pub-6883622550208397",
         enable_page_level_ads: true
         });
      </style>
      <?php
         include("include/simple_header.php");
         ?> 
   </head>
   <body>
      <h1>Extension</h1>
      <table align="center" >
         <form method="post" action="extension_update_conn.php" enctype="multipart/form-data"  >
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- PHPGang top demo all pages2 -->
            <script>
               (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
            <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <link rel="stylesheet" 
               href=
               "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <script src="assets/js/countrystatecity.js"></script>
            <tr>
               <h2 align="center">Extension</h2>
            <tr>
               <?php
                  $sql = "SELECT * from extension where enroll='$user_id'";
                  $result = mysqli_query($conn,$sql);
                  
                  while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                  ?>
               <td>
                  <label for="name" ><i class="fa fa-user icon " aria-hidden="true">&nbsp; &nbsp;Name of Award/Medal/Achievement:</i></label>
               </td>
               <td>
                  <input type="text" id="Name_of_award" name="Name_of_award" required value="<?php echo $row['name_of_award']?>"><br><br>
               </td>
            </tr>
            <tr>
               <td>
                  <label for="Date"><i class="fa fa-calendar-check-o " aria-hidden="true">&nbsp;&nbsp;&nbsp;Date:</i></label>
               </td>
               <td>
                  <input type="date" id="Date" name="Date" value="<?php echo $row['date']?>">
               </td>
            </tr>
            <tr>
               <td>
                  <label for="ending_date"><i class="fa fa-calendar" aria-hidden="true">&nbsp;&nbsp;&nbsp;Year:</i></label><br>  
               </td>
               <td>
                  <select name="year" value="<?php echo $row['year']?>">
                     <option value="2017-18" <?php if($row['year']=="2017-18"){ echo "selected"; }?>><br>
                        2017-18
                     </option>
                     <option value="2018-19" <?php if($row['year']=="2018-19"){ echo "selected"; }?>><br>
                        2018-19
                     </option>
                     <option value="2019-20" <?php if($row['year']=="2019-20"){ echo "selected"; }?>><br>
                        2019-20
                     </option>
                     <option value="2020-21" <?php if($row['year']=="2020-21"){ echo "selected"; }?>><br>
                        2020-21
                     </option>
                     <option  value="2021-22" <?php if($row['year']=="2021-22"){ echo "selected"; }?>><br>
                        2021-22
                     </option>
                     <option  value="2022-23" <?php if($row['year']=="2022-23"){ echo "selected"; }?>><br>
                        2022-23
                     </option>
                     <option  value="2023-24" <?php if($row['year']=="2023-24"){ echo "selected"; }?>><br>
                        2023-24
                     </option>
                     <option  value="2024-25" <?php if($row['year']=="2024-25"){ echo "selected"; }?>><br>
                        2024-25
                     </option>
                  </select>
                  <br><br>
               </td>
            </tr>
            <tr>
               <td>
                  <label for="ending_date"><i class="fa fa-child" aria-hidden="true">&nbsp;&nbsp;&nbsp;Team/Individual:</i></label><br>  
               </td>
               <td>
                  <select name="Team" value="<?php echo $row['team']?>">
                  <option value="Team" <?php if($row['team']=="Team"){ echo "selected"; }?>><br>
                     Team
                  </option>
                  <option value="Individual" <?php if($row['team']=="Individual"){ echo "selected"; }?>><br>
                     Individual
                  </option>
               </td>
            </tr>
            <tr>
               <td>
                  <label for="ending_date"><i class="fa fa-trophy" aria-hidden="true">&nbsp;&nbsp;&nbsp;Level:</i></label><br>  
               </td>
               <td>
                  <select name="level" value="<?php echo $row['level']?>">
                  <option value="Inter Department" <?php if($row['level']=="Inter Department"){ echo "selected"; }?>><br>
                     Inter Department
                  </option>
                  <option value="Inter University" <?php if($row['level']=="Inter University"){ echo "selected"; }?>><br>
                     Inter University
                  </option>
                  <option value="State Level" <?php if($row['level']=="State Level"){ echo "selected"; }?>><br>
                     State Level
                  </option>
                  <option value="National Level" <?php if($row['level']=="National Level"){ echo "selected"; }?>><br>
                     National Level
                  </option>
                  <option value="International Level" <?php if($row['level']=="International Level"){ echo "selected"; }?>><br>
                     International Level
                  </option>
               </td>
            </tr>
            <tr>
               <td>
                  <label for="name" ><i class="fa fa-user-circle" aria-hidden="true">&nbsp; &nbsp;Name of Awarding Agency:</i></label>
               </td>
               <td>
                  <input type="text" id="Name_of_Awarding_agency" name="Name_of_Awarding_agency" required value="<?php echo $row['name_of_agency']?>"><br><br>
               </td>
            </tr>
            <tr>
               <td>
                  <label for="name" ><i class="fa fa-address-book-o" aria-hidden="true">&nbsp; &nbsp;Contact Details of Awarding Agency:</i></label>
               </td>
               <td>
                  <input type="text" id="contact_details" name="contact_details" value="<?php echo $row['contact_details']?>"><br><br>
               </td>
            </tr>
            <tr>
               <td>
                  <label for="file"><i class="fa fa-cloud-upload " aria-hidden="true">&nbsp;&nbsp;&nbsp;Photo of Award:</i></label><br>
               </td>
               <td>
                  <!-- <label for="file">Certificate:</label> -->
                  <input type="file"  name="photo" id="file" ><br><br>
                  <!-- <input type="file"  name="photo" id="file" ><br><br>
                     <input type="file"  name="photo" id="file" ><br><br> -->
               </td>
            </tr>
            <tr>
               <td>
                  <label for="file"><i class="fa fa-upload " aria-hidden="true">&nbsp;&nbsp;&nbsp;Receving Photo of Award:</i></label><br>
               </td>
               <td>
                  <!-- <label for="file">Certificate:</label> -->
                  <input type="file"  name="receiving_photo" id="file" ><br><br>
               </td>
            </tr>
            <?php
               break;
               }
               ?>
            <tr align="center">
               <td >
                  <input type="submit" value="update"  name= "update">
               </td>
            </tr>
            </tr>
         </form>
      </table>
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-149371669-1"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
         
         gtag('config', 'UA-149371669-1');
      </script>
   </body>
</html>