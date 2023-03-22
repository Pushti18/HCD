<?php
   session_start();
   if($_SESSION['enrollment_no'] == false){
     header("Location: index.php");
   }
   include("php/config.php");
   ?>
<!doctype html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Sports</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <title>Student's Corner</title>
      <?php
         include("include/main.php");
         ?> 
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.css"/>
      <script type="text/javascript" src="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.js"></script>
      <script type="text/javascript" src="script/script.js"></script>
      <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.css"/> -->
      <!-- <script type="text/javascript" src="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.js"></script> -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/
         jquery.min.js"></script>
      <link rel="stylesheet" type="text/css" 
         href="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,
         pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,
         b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.css"/>
      <script type="text/javascript" src="https://cdn.datatables.net/
         r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,
         b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/
         datatables.min.js"></script>
      <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
      <!-- Include Font Awesome -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- Style -->
      <style type="text/css">
         table {
         width: 117%;
         margin-left: -8%; 
         margin-right: 100%;
         all: invert;
         border-collapse: collapse; 
         margin-top: 60px;
         margin-bottom: 40px;
         /* padding:10px; */
         border:0;
         box-shadow:0 0 15px 4px rgba(0,0,0,0.15);
         background-color: #f2f2f2;
         border-color:black;
         /* border : 1px solid black; */
         border:5px double black;


         }
         
         table, th, td {
         border: 1px solid #bbb;
         text-align: left;
         /* border-radius:20px; */
         border-color: black;
         border: 2px solid black;
         }
         tr:nth-child(even) {
         /* background-color: #f2f2f2; */
         background-color: #ddd;
         /* background-color: #f2f2f2; */
         }
         th {
         background-color: #ddd;
         }
         th,td {
            padding: 4px;
         text-align: center
         /* padding: 7px; */
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
         body { 
         margin: 0;
         font-family: Arial, Helvetica, sans-serif;
         }
         a {
         color: blue;
         text-decoration: none;
         }
      </style>
      <?php include './include/simple_header.php'; ?>
   </head>
   <body>
      <script type="text/javascript">
         google_ad_client = "ca-pub-2783044520727903";
         /* jQuery_demo */
         google_ad_slot = "2780937993";
         google_ad_width = 728;
         google_ad_height = 90;
         //-->
      </script>
      <script type="text/javascript" src="script/script.js"></script>
      <script type="text/javascript"
         src="https://pagead2.googlesyndication.com/pagead/show_ads.js"></script></div>
      <div class="container">
         <h1>Sports</h1>
         <a href="sportsdata.php"><button type="button" class="btn btn-success btn-rounded" style="float: right;">Add Sports Achievements</button></a><br><br>
         <?php 
            $enroll = $_SESSION["enrollment_no"];
              $sql = "SELECT * from sports  where enroll='$enroll'";
            
              
              $result = mysqli_query($conn, $sql);
              $row = mysqli_fetch_assoc($result);
            ?>
         <!-- <button type="button" class="btn btn-danger btn-rounded" style="float: right;" >Export</button></a> -->
         <!-- <div class="container"> -->
         <!-- <div class="row">
            <div class="col-md-2 mt-2"> -->
         <!-- 
            </div>
            </div>
            
            </div> -->
         <!-- </div>
            </div> -->
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
         <!-- Table start -->
         <table class="tablemanager"  id="example" align="center">
            <thead>
               <tr>
                  <th style="width:5%">id</th>
                  <th style="width:30%">STUDENT NAME</th>
                  <th >ENROLLMENT</th>
                  <th >NAME OF AWARD</th>
                  <th >DATE</th>
                  <th  style="width:20%">Year</th>
                  <th  style="width:20%">TEAM/INDIVIDUAL</th>
                  <th  style="width:20%">LEVEL</th>
                  <th  style="width:20%">NAME OF AGENCY</th>
                  <th  style="width:20%">CONTACT DETAILS OF AGENCY</th>
                  <th  style="width:20%" class="disableSort disableFilterBy">PHOTO OF AWARD</th>
                  <th  style="width:20%" class="disableSort disableFilterBy">PHOTO OF RECEIVING AWARD</th>
                  <th class="disableFilterBy" style="width:20%">UPDATE</th>
               </tr>
            </thead>
            <tbody>
               <?php 
                  $sql = "SELECT * from sports ";
                  $result = mysqli_query($conn, $sql);
                  if (mysqli_num_rows($result) > 0) 
                  {
                  
                   while($row = mysqli_fetch_assoc($result)) {
                     
                     ?>
               <tr >
                  <td>
                     <?php 
                        echo $row['id'];
                        ?>
                  </td>
                  <td>
                     <?php 
                        echo $row['studentName'];
                        ?>
                  </td>
                  <td>
                     <?php 
                        echo $row['enroll'];
                        ?>
                  </td>
                  <td>
                     <?php 
                        echo $row['name_of_award'];
                        ?><br>
                  </td>
                  <td>
                     <?php 
                        echo $row['date'];
                        ?><br>
                  </td>
                  <td>
                     <?php 
                        echo $row['year'];
                        ?><br>
                  </td>
                  <td>
                     <?php 
                        echo $row['team'];
                        ?><br>
                  </td>
                  <td>
                     <?php 
                        echo $row['level'];
                        ?><br>
                  </td>
                  <td>
                     <?php 
                        echo $row['name_of_agency'];
                        ?><br>
                  </td>
                  <td>
                     <?php 
                        echo $row['contact_details'];
                        ?><br>
                  </td>
                  <td>
                     <a href="<?php echo $row['photo_of_award']; ?>" target="_blank">View - photo_of_award</a>
                     <a href="<?php echo $row['photo_of_award2']; ?>" target="_blank">View - photo_of_award</a>
                     <a href="<?php echo $row['photo_of_award3']; ?>" target="_blank">View - photo_of_award</a>
                     <br>
                  </td>
                  <td>
                     <!-- <td> -->
                     <a href="<?php echo $row['receiving_award']; ?>" target="_blank">View - receiving_award</a>
                     <!-- </td> -->
                     <br>
                     <!-- <td> -->
                     <br>
                  <td>
                     <?php 
                        if ($_SESSION['enrollment_no']== $row['enroll']) {
                          // User is logged in, show the update option
                          echo '<a href="sports_update.php"><i class="fa fa-pencil-square fa-2x" aria-hidden="true"></i>Update</a>';
                        } else {
                          echo "";
                          // User is not logged in, hide the update option
                          // or show a message prompting them to log in
                          // depending on your website's design
                        }
                        
                        ?>
                     <!-- <a href="update.php"><i class="fa fa-pencil-square fa-2x" aria-hidden="true"></i></a> -->
                  </td>
                  <?php
                     }
                     }  else {
                      echo "0";
                     }
                     
                     
                     ?>
                  </td>
            </tbody>
         </table>
      </div>
      <!-- External jQuery -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script type="text/javascript" src="./js/jquery-1.12.3.min.js"></script>
      <script type="text/javascript" src="./tableManager.js"></script>
      <script type="text/javascript">
         // basic usage
         $('.tablemanager').tablemanager({
         	firstSort: [[3,0],[2,0],[1,'asc']],
         	disable: ["last"],
         	appendFilterby: true,
         	dateFormat: [[4,"mm-dd-yyyy"]],
         	debug: true,
         	vocabulary: {
           voc_filter_by: 'Filter By',
           voc_type_here_filter: 'Filter...',
           voc_show_rows: 'Rows Per Page'
         },
         	pagination: true,
         	showrows: [5,10,20,50,100],
         	disableFilterBy: [1]
         });
         // $('.tablemanager').tablemanager();
      </script>
      <script>
         try {
           fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", { method: 'HEAD', mode: 'no-cors' })).then(function(response) {
             return true;
           }).catch(function(e) {
             var carbonScript = document.createElement("script");
             carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CK7DKKQU&placement=wwwjqueryscriptnet";
             carbonScript.id = "_carbonads_js";
             document.getElementById("carbon-block").appendChild(carbonScript);
           });
         } catch (error) {
           console.log(error);
         }
      </script>
      <script type="text/javascript">
         var _gaq = _gaq || [];
         _gaq.push(['_setAccount', 'UA-36251023-1']);
         _gaq.push(['_setDomainName', 'jqueryscript.net']);
         _gaq.push(['_trackPageview']);
         
         (function() {
           var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
           ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
           var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
         })();
         
      </script>
   </body>
</html>