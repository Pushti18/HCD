<?php
   session_start();
   if(isset($_POST['std_en'])){
       $en = $_POST['std_en'];
       $sql = mysqli_query($conn,"SELECT * FROM login WHERE en_roll = $en");
       $row = $sql->fetch_assoc();
       if($row['studentName'] == ""){
         header("Location: ./passout_student.php");
       }
     }
   
   include("php/config.php");
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title>Mooc Form</title>
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
         width: 80%;
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
      <br><br><br>
      <h1>Mooc Form</h1>
      <table align="center" >
         <form method="post" action="admin_insert_moocoon.php" enctype="multipart/form-data"  >
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
               <!-- <h2>Intenship Form</h2> -->
               <!-- <td>
                  <label for="name" ><i class="fa fa-user icon " aria-hidden="true">&nbsp; &nbsp;Name of Company:<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(as per website)</i></label>
                        
                  
                  </td> -->
               <!-- <td>
                  <input type="text" id="Name_of_Company" name="Name_of_Company" required><br><br>
                  </td> -->
               <!-- <tr>
                  <td>
                  		<label for="address"><i class="fa fa-address-card " aria-hidden="true">&nbsp;&nbsp;&nbsp;Address:</i></label>
                  </td>
                  <td>
                  		<input type="text" id="address" name="Address" required rows="4" cols="30"><br><br>
                  </td>
                  </tr> -->
               <!-- <tr>
                  <td>
                  <label for="email"><i class="fa fa-envelope " aria-hidden="true">&nbsp;&nbsp;&nbsp;Email:</i></label>
                  </td>
                  <td>
                      <input type="text" name="Email" class="email" tabindex=2 /><br><br>
                  </td>
                  <tr>
                  <td>
                  <label for="country"><i class="fa fa-globe " aria-hidden="true">&nbsp;&nbsp;&nbsp;Country:</i></label>
                  </td> -->
               <!-- <td>
                  <select name="Country" class="countries form-control" id="countryId">
                      <option value="">Select Country</option>
                  </select>
                  		<input type="text" id="country" name="country" required><br><br> -->
               <!-- </td>
                  </tr>
                  </tr>  -->
               <!-- <tr>
                  <td>
                  		<label for="state">State:</label>
                  </td>
                  <td>
                  <select name="State" class="states form-control" id="stateId">
                      <option value="">Select State</option>
                  </select>
                  		<input type="text" id="state" name="state" required><br><br>
                  </td>
                  </tr>
                  		 <input type="email" id="email" name="email" required><br><br> 
                  		<tr>
                              <td>
                  		<label for="city">City:</label>
                  </td>
                  <td>
                  <select name="City" class="cities form-control" id="cityId">
                      <option value="">Select City</option>
                  </select>
                  		<input type="text" id="city" name="city" required><br><br>
                  </td>
                  </tr> 
                  -->
               <!-- <tr>
                  <td>
                  <label for ="Type">Field:</label>
                  </td>
                  <td>
                      <input type="radio" name="Field" value="Research"/>RESEARCH 
                  
                      <input type="radio" name="Field" value="Industry"/>INDUSTRY 
                  </td>
                  </tr> -->
            <tr>
               <td>
                  <label for="joining_date"><i class="fa fa-calendar-check-o " aria-hidden="true">&nbsp;&nbsp;&nbsp;Date:</i></label>
               </td>
               <td>
                  <input type="date" id="joining_date" name="Date_of_Joining" required>
               </td>
            </tr>
            <!-- <tr>
               <td>
               <label for="ending_date"><i class="fa fa-calendar-times-o " aria-hidden="true">&nbsp;&nbsp;&nbsp;Date of Ending:</i></label>
               </td>
               <td>
               <input type="date" id="ending_date" name="Date_of_Ending" required>
               </td>
               </tr> -->
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
            <!-- <tr>
               <td>
               
               <label for="ending_date"><i class="fa fa-check " aria-hidden="true">&nbsp;&nbsp;&nbsp;Passout Year:</i></label><br>  
               </td>
               <td>
               <select name="year" >
               
               
               
               <option value="2014-18" ><br>
               2014-18</option>
               <option value="2015-19" ><br>
               2015-19</option>
               <option value="2016-20" ><br>
               2016-20</option>
               <option value="2017-21" ><br>
               2017-21</option>
               <option  value="2018-22" ><br>
               2018-22</option>
               <option  value="2019-23" ><br>
               2019-23</option>
               <option  value="2020-24" ><br>
               2020-24</option>
               <option  value="2021-25" ><br>
               2021-25</option>
               </select><br><br>
               </td>
               
               </tr>  -->
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
            <!-- <option value="3 " ><br>
               Others</option> -->
            Other
            <input type="text" name="Skills_Involved1" maxlength="30" />
            </td>
            </tr> 
            <!-- <tr>
               <td>
               <label ><i class="fa fa-bookmark " aria-hidden="true">&nbsp;&nbsp;&nbsp;Skills Involved:</i></label>
               </td>
               <td>
               
               CRITICAL THINKING
                <input type="radio" name="Skills_Involved" value="CRITICAL THINKING" /><br>
                SELF-MANAGEMENT
                <input type="radio" name="Skills_Involved" value="SELF-MANAGEMENT" /><br>
                QUICK LEARNING
                <input type="radio" name="Skills_Involved"  value="QUICK LEARNING" /><br>
                COMMUNICATION
                <input type="radio" name="Skills_Involved" value="COMMUNICATION" /><br>
                ADAPTABILITY
                <input type="radio" name="Skills_Involved" value="ADAPTABILITY" /><br>
                All Of The Above
                <input type="radio" name="Skills_Involved" value="All Of the Above" /><br>
                 OTHER:
                 <Input  type="text" name="Skills_Involved1" />
               </td>
               </tr> -->
            <tr>
               <td>
                  <label for="file"><i class="fa fa-cloud-upload " aria-hidden="true">&nbsp;&nbsp;&nbsp;Certificate:</i></label><br>
               </td>
               <td>
                  <!-- <label for="file">Reference:</label>
                     <input type="file"  name="Reference" id="file"><br><br> 
                       
                           <label for="file">Photos:</label>
                     <input type="file" name="file" id="file"><br><br> -->
                  <label for="file">Certificate:</label>
                  <input type="file"  name="Certificate" id="file" ><br><br>
                  <!-- <label for="file">Report:</label>
                     <input type="file"  name="Report" id="file" ><br><br> -->
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