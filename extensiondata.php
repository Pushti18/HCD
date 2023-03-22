<?php
   session_start();
   if($_SESSION['enrollment_no'] == false){
     header("Location: index.php");
   }
   include("php/config.php");
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
         width: 70%;
         /* border-collapse: collapse; */
         margin-top: 40px;
         margin-bottom: 40px;
         padding:10px;
         /* border:0; */
         box-shadow:0 0 15px 4px rgba(0,0,0,0.5);
         /* border-radius:20px; */
         border-color:black;
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
      <table align="center">
         <colgroup>
            <col span="1" style="width: 50%;">
            <col span="1" style="width: 50%;">
         </colgroup>
         <form method="post" action="extensionconn.php" enctype="multipart/form-data"  >
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
               <br><br><br><br>
               <h2 align="center">Extension</h2>
               <td>
                  <label for="name" ><i class="fa fa-user icon " aria-hidden="true">&nbsp; &nbsp;Name of Award/Medal/Achievement:</i></label>
               </td>
               <td>
                  <input type="text" id="Name_of_award" name="Name_of_award" required><br><br>
               </td>
            </tr>
            <tr>
               <td>
                  <label for="Date"><i class="fa fa-calendar-check-o " aria-hidden="true">&nbsp;&nbsp;&nbsp;Date:</i></label>
               </td>
               <td>
                  <input type="date" id="Date" name="Date">
               </td>
            </tr>
            <tr>
               <td>
                  <label for="ending_date"><i class="fa fa-calendar" aria-hidden="true">&nbsp;&nbsp;&nbsp;Year:</i></label><br>  
               </td>
               <td>
                  <select name="year" >
                     <option value="2017-18" ><br>
                        2017-18
                     </option>
                     <option value="2018-19" ><br>
                        2018-19
                     </option>
                     <option value="2019-20" ><br>
                        2019-20
                     </option>
                     <option value="2020-21" ><br>
                        2020-21
                     </option>
                     <option  value="2021-22" ><br>
                        2021-22
                     </option>
                     <option  value="2022-23" ><br>
                        2022-23
                     </option>
                     <option  value="2023-24" ><br>
                        2023-24
                     </option>
                     <option  value="2024-25" ><br>
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
                  <select name="Team" >
                  <option value="Team" ><br>
                     Team
                  </option>
                  <option value="Individual" ><br>
                     Individual
                  </option>
               </td>
            </tr>
            <tr>
               <td>
                  <label for="ending_date"><i class="fa fa-trophy" aria-hidden="true">&nbsp;&nbsp;&nbsp;Level:</i></label><br>  
               </td>
               <td>
                  <select name="level" >
                  <option value="Inter Department" ><br>
                     Inter Department
                  </option>
                  <option value="Inter University" ><br>
                     Inter University
                  </option>
                  <option value="State Level" ><br>
                     State Level
                  </option>
                  <option value="National Level" ><br>
                     National Level
                  </option>
                  <option value="international Level" ><br>
                     international Level
                  </option>
               </td>
            </tr>
            <tr>
               <td>
                  <label for="name" ><i class="fa fa-user-circle" aria-hidden="true">&nbsp; &nbsp;Name of Awarding Agency:</i></label>
               </td>
               <td>
                  <input type="text" id="Name_of_Awarding_agency" name="Name_of_Awarding_agency" required><br><br>
               </td>
            </tr>
            <tr>
               <td>
                  <label for="name" ><i class="fa fa-address-book-o" aria-hidden="true">&nbsp; &nbsp;Contact Details of Awarding Agency:</i></label>
               </td>
               <td>
                  <input type="text" id="contact_details" name="contact_details"><br><br>
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
            <tr align="center">
               <td >
                  <input type="submit" value="submit"  name= "submit">
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