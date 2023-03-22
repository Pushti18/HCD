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
         font-family: 'Open Sans', sans-serif;
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
      <table align="center" >
         <br><br><br>
         <h1>Mooc Form</h1>
         <form method="post" action="moocconn.php" enctype="multipart/form-data">
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
               <td>
                  <label for="joining_date"><i class="fa fa-calendar-check-o " aria-hidden="true">&nbsp;&nbsp;&nbsp;Date:</i></label>
               </td>
               <td>
                  <input type="date" id="joining_date" name="Date_of_Joining" required>
               </td>
            </tr>
            <tr>
               <td>
                  <label for="ending_date"><i class="fa fa-file " aria-hidden="true">&nbsp;&nbsp;&nbsp;Sem:</i></label><br>  
               </td>
               <td>
                  <select name="Sem" >
                     <option value="Sem 1" ><br>
                        Sem 1
                     </option>
                     <option value="Sem 2" ><br>
                        Sem 2
                     </option>
                     <option value="Sem 3" ><br>
                        Sem 3
                     </option>
                     <option value="Sem 4" ><br>
                        Sem 4
                     </option>
                     <option  value="Sem 5" ><br>
                        Sem 5
                     </option>
                     <option  value="Sem 6" ><br>
                        Sem 6
                     </option>
                     <option  value="Sem 7" ><br>
                        Sem 7
                     </option>
                     <option  value="Sem 7" ><br>
                        Sem 8
                     </option>
                  </select>
                  <br><br>
               </td>
            </tr>
            <tr>
               <td>
                  <label for="ending_date"><i class="fa fa-tasks" aria-hidden="true">&nbsp;&nbsp;&nbsp;Credit:</i></label><br>  
               </td>
               <td>
                  <select name="Duration" >
                     <option value="Partial Credit" ><br>
                        Partial Credit
                     </option>
                     <option value="Non-Credit" ><br>
                        Non-Credit
                     </option>
                     <option value="Full Credit" ><br>
                        Full Credit
                     </option>
               </td>
            </tr>
            <tr>
               <td>
                  <label for="ending_date"><i class="fa fa-id-card-o" aria-hidden="true">&nbsp;&nbsp;&nbsp;Platform:</i></label><br>  
               </td>
               <td>
                  <select name="Skills_Involved" >
                  <option value="Amazon" ><br>
                  Amazon</option>
                  <option value="Coursera" ><br>
                  Coursera</option>
                  <option value="SimpliLearn" ><br>
                  SimpliLearn</option>
                  <option value="NPTEL" ><br>
                  NPTEL</option>
                  <option value="Swayam" ><br>
                  Swayam</option>
                  <option value="Edx" ><br>
                  Edx</option>
                  <option value="Udemy" ><br>
                  Udemy</option>
                  <option value="Infosys" ><br>
                  Infosys</option>
                  <option value="Cisco" ><br>
                  Cisco</option>
                  <option value="IBM" ><br>
                  IBM </option>
                  <option value="AWS" ><br>
                  AWS</option>
                  <option value="Google" ><br>
                  Google</option>
                  <option value="Azure" ><br>
                  Azure</option><br>
                  </select><br><br>
                  Other
                  <input type="text" name="Skills_Involved1" maxlength="30" />
               </td>
            </tr> 
            <tr>
               <td>
                  <label for="file"><i class="fa fa-cloud-upload " aria-hidden="true">&nbsp;&nbsp;&nbsp;Certificate:</i></label><br>
               </td>
               <td>
                  <label for="file">Certificate:</label>
                  <input type="file"  name="Certificate" id="file" multiple><br><br>
               </td>
            </tr>
            <tr align="center">
               <td>
                  <input type="submit" value="submit"  name= "submit">
               </td>
            </tr>
      <!-- </tr> -->
         </form>
      </table>
      <!-- </form> -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-149371669-1"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
         
         gtag('config', 'UA-149371669-1');
      </script>
   </body>
</html>