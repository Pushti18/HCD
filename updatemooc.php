<?php
   session_start();
   if(!isset($_SESSION['student_id'])){
     header("Location: index.php");
   }
   include("php/config.php");
   $user_id = $_SESSION['enrollment_no'];
   $studentName = $_SESSION['Name'];
   // echo $user_id
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title>Mooc</title>
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
         /*Initial style sort* 
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
   </head>
   <body>
      <table align="center" border="1">
         <form method="post" action="./updatemooconn.php" enctype="multipart/form-data"  >
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
            <h1 align="center">Mooc</h1>
            <?php
               $sql = "SELECT * from mooc where enroll='$user_id'";
               $result = mysqli_query($conn,$sql);
               
               // $sql1 = "SELECT industry_details.*, intenship.* from intenship inner join industry_details on industry_details.intenship_id=intenship.id where enroll='$user_id'";
               // $result1 = mysqli_query($conn,$sql1);
               //$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
               //$while = $row;
               
               while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                 // echo $row['enroll'];
               
               ?>
            <tr>
               <td>
                  <label for="joining_date"><i class="fa fa-calendar-check-o " aria-hidden="true">&nbsp;&nbsp;&nbsp;Date:</i></label>
               </td>
               <td>
                  <input type="date" id="joining_date" name="Date_of_Joining" required value="<?php echo $row['Date']?>">
               </td>
            </tr>
            <tr>
               <td>
                  <label for="ending_date"><i class="fa fa-file " aria-hidden="true">&nbsp;&nbsp;&nbsp;Sem:</i></label><br>  
               </td>
               <td>
                  <select name="Sem" value="<?php echo $row['Sem']?>" >
                     <option value="Sem 1" <?php if($row['Sem']=="Sem 1"){ echo "selected"; }?>><br>
                        Sem 1
                     </option>
                     <option value="Sem 2" <?php if($row['Sem']=="Sem 2"){ echo "selected"; }?>><br>
                        Sem 2
                     </option>
                     <option value="Sem 3" <?php if($row['Sem']=="Sem 3"){ echo "selected"; }?>><br>
                        Sem 3
                     </option>
                     <option value="Sem 4" <?php if($row['Sem']=="Sem 4"){ echo "selected"; }?>><br>
                        Sem 4
                     </option>
                     <option  value="Sem 5" <?php if($row['Sem']=="Sem 5"){ echo "selected"; }?>><br>
                        Sem 5
                     </option>
                     <option  value="Sem 6" <?php if($row['Sem']=="Sem 6"){ echo "selected"; }?>><br>
                        Sem 6
                     </option>
                     <option  value="Sem 7" <?php if($row['Sem']=="Sem 7"){ echo "selected"; }?>><br>
                        Sem 7
                     </option>
                     <option  value="Sem 8" <?php if($row['Sem']=="Sem 8"){ echo "selected"; }?>><br>
                        Sem 8
                     </option>
                  </select>
                  <br><br>
               </td>
            </tr>
            <!-- <tr>
               <td>
               
               <label for="ending_date"><i class="fa fa-check " aria-hidden="true">&nbsp;&nbsp;&nbsp;Passout Year:</i></label><br>   
               </td>
               <td>
               <select name="year" checked="<?php echo $row['year']?>">
               
               
               
               <option value="2014-18" <?php if($row['year']=="2014-18"){ echo "selected"; }?> ><br>
               2014-18</option>
               <option value="2015-19" <?php if($row['year']=="2015-19"){ echo "selected"; }?>  ><br>
               2015-19</option>
               <option value="2016-20" <?php if($row['year']=="2016-20"){ echo "selected"; }?>  ><br>
               2016-20</option>
               <option value="2017-21" <?php if($row['year']=="2017-21"){ echo "selected"; }?> ><br>
               2017-21</option>
               <option  value="2018-22" <?php if($row['year']=="2018-22"){ echo "selected"; }?> ><br>
               2018-22</option>
               <option  value="2019-23" <?php if($row['year']=="2019-23"){ echo "selected"; }?> ><br>
               2019-23</option>
               <option  value="2020-24" <?php if($row['year']=="2020-24"){ echo "selected"; }?> ><br>
               2020-24</option>
               <option  value="2021-25" <?php if($row['year']=="2021-25"){ echo "selected"; }?> ><br>
               2021-25</option>
               </select><br><br>
               </td>
               
               </tr> -->
            <tr>
               <td>
                  <label for="ending_date"><i class="fa fa-calendar " aria-hidden="true">&nbsp;&nbsp;&nbsp;Credit:</i></label><br>   
               </td>
               <td>
                  <select name="Duration" checked="<?php echo $row['Credit']?>">
                  <option value="Partial Credit" <?php if($row['Credit']=="Partial Credit"){ echo "selected"; }?> ><br>
                     Partial Credit
                  </option>
                  <option value="Non-Credit" <?php if($row['Credit']=="Non-Credit"){ echo "selected"; }?>><br>
                     Non-Credit
                  </option>
                  <option value="Full Credit" <?php if($row['Credit']=="Full Credit"){ echo "selected"; }?>><br>
                     Full Credit
                  </option>
               </td>
            </tr>
            <tr>
               <td>
                  <label ><i class="fa fa-bookmark " aria-hidden="true">&nbsp;&nbsp;&nbsp;Platform:</i></label>
               </td>
               <td>
                  Amazon
                  <input type="radio" name="Skills_Involved" value="Amazon" <?php if($row['platform']=="Amazon"){ echo "checked"; }?>/><br>
                  Coursera
                  <input type="radio" name="Skills_Involved" value="Coursera" <?php if($row['platform']=="Coursera"){ echo "checked"; }?>/><br>
                  SimpliLearn
                  <input type="radio" name="Skills_Involved"  value="SimpliLearn" <?php if($row['platform']=="SimpliLearn"){ echo "checked"; }?>/><br>
                  NPTEL
                  <input type="radio" name="Skills_Involved" value="NPTEL" <?php if($row['platform']=="NPTEL"){ echo "checked"; }?>/><br>
                  Swayam
                  <input type="radio" name="Skills_Involved" value="Swayam" <?php if($row['platform']=="Swayam"){ echo "checked"; }?> /><br>
                  Edx
                  <input type="radio" name="Skills_Involved" value="Edx" <?php if($row['platform']=="Edx"){ echo "checked"; }?>/><br>
                  Udemy
                  <input type="radio" name="Skills_Involved" value="Udemy" <?php if($row['platform']=="Udemy"){ echo "checked"; }?>/><br>
                  Infosys
                  <input type="radio" name="Skills_Involved" value="Infosys" <?php if($row['platform']=="Infosys"){ echo "checked"; }?>/><br>
                  Cisco
                  <input type="radio" name="Skills_Involved" value="Cisco" <?php if($row['platform']=="Cisco"){ echo "checked"; }?>/><br>
                  IBM
                  <input type="radio" name="Skills_Involved" value="IBM" <?php if($row['platform']=="IBM"){ echo "checked"; }?>/><br>
                  AWS
                  <input type="radio" name="Skills_Involved" value="AWS" <?php if($row['platform']=="AWS"){ echo "checked"; }?>/><br>
                  Google
                  <input type="radio" name="Skills_Involved" value="Google" <?php if($row['platform']=="Google"){ echo "checked"; }?>/><br>
                  Azure
                  <input type="radio" name="Skills_Involved" value="Azure" <?php if($row['platform']=="Azure"){ echo "checked"; }?>/><br>
                  Other
                  <input type="text" name="Skills_Involved1" value="Other" /><br>
               </td>
            </tr>
            <tr>
               <td>
                  <label for="file"><i class="fa fa-cloud-upload " aria-hidden="true">&nbsp;&nbsp;&nbsp;Attachments:</i></label><br>
               </td>
               <td>
                  <label for="file">Certificate:</label>
                  <input type="file"  name="Certificate" id="file" ><br><br> 
               </td>
            </tr>
            <?php
               break;
               }
               ?>
            <!-- </table>
               <table> -->
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