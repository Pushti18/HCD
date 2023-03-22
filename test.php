<?php
   session_start();
   if($_SESSION['enrollment_no'] == false){
     header("Location: index.php");
   }
   include("php/config.php");
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Student's Sectio</title>
      <?php include 'include/main.php'; ?>   
      <style>
         body{
         background: linear-gradient(90deg, rgba(2,0,30,1) 0%, rgb(115 215 235) 0%, rgb(122 220 241) 0%, rgb(154 223 237) 100%);
         /* background: -webkit-linear-gradient(left, #25c481, #25b7c4);
         background: linear-gradient(to right, #25c481, #25b7c4); */
         font-family: 'Roboto', sans-serif;
         }
         .header {
         overflow: hidden;
         background-color: #f1f1f1;
         padding: 20px 10px;
         }
         #header {
         transition: all 0.5s;
         background: #fff;
         z-index: 997;
         padding: 0.3% 0;
         border-bottom: 1px solid #e6f2fb;
         }
         .header a {
         float: left;
         color: black;
         text-align: center;
         padding: 12px;
         text-decoration: none;
         font-size: 10px; 
         line-height: 25px;
         border-radius: 4px;
         }
         .header a.logo {
         font-size: 25px;
         font-weight: bold;
         }
         /* .header a:hover {
         background-color: #ddd;
         color: black;
         } */
         .header a.active {
         background-color: dodgerblue;
         color: white;
         }
         .header-right {
         float: right;
         }
         @media screen and (max-width: 500px) {
         .header a {
         float: none;
         display: block;
         text-align: left;
         }
         .header-right {
         float: none;
         }
         }
         .align-items-center {
         align-items: center!important;
         }
         .justify-content-between {
         justify-content: space-between!important;
         }.d-flex {
         display: flex!important;
         }.container, .container-fluid, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {
         --bs-gutter-x: 1.5rem;
         --bs-gutter-y: 0;
         width: 100%;
         padding-right: calc(var(--bs-gutter-x) * .5);
         padding-left: calc(var(--bs-gutter-x) * .5);
         margin-right: auto;
         margin-left: auto;
         }*, ::after, ::before {
         box-sizing: border-box;
         }#header {
         transition: all 0.5s;
         background: #fff;
         z-index: 997;
         padding: 0.3% 0;
         border-bottom: 1px solid #e6f2fb;
         }
         #header.header-scrolled {
         border-color: #fff;
         box-shadow: 0px 2px 15px rgba(18, 66, 101, 0.08);
         }
         #header .logo {
         font-size: 28px;
         margin: 0;
         padding: 0;
         line-height: 1;
         font-weight: 300;
         letter-spacing: 0.5px;
         font-family: "Poppins", sans-serif;
         }
         #header .logo a {
         color: #16507b;
         }
         #header .logo img {
         max-height: 40px;
         }
         @media (max-width: 992px) {
         #header .logo {
         font-size: 20px;
         }
         .ict_logo {
         width: 10rem;
         }
         }
      </style>
      <?php include 'include/simple_header.php'; ?>
   </head>
   <body>
      <!-- PAGE TITLE -->
      <div class="page-title">
         <h2>Internship Experience</h2>
         <a href="try.php"><button type="button" class="btn btn-success btn-rounded" style="float: right;">Add new Internship Report</button></a>
         <br><br>&nbsp;&nbsp;&nbsp;&nbsp;
         <?php 
            $sql = "SELECT * from intenship ";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            
            
            ?>
         <a href="./Report/admin.php?enroll=<?php echo $row['enroll'].'&noc='.$row['name_of_company'].'&id='.$row['id']; ?>" name="report"><button type="button" class="btn btn-danger btn-rounded" style="float: right;">Your Internship Report</button></a>
         <!-- <a href="update.php" ><button type="button" class="btn btn-danger btn-rounded" style="float: right;">Your Internship Report</button></a> -->
      </div>
      <form class="form-horizontal">
         <div class="panel panel-default tabs">
            <ul class="nav nav-tabs" role="tablist">
               <li class="active"><a href="#" role="tab" data-toggle="tab">Students</a></li>
               <!--li><a href="#tab-second" role="tab" data-toggle="tab">2018-2022</a></li>
                  <li><a href="#tab-third" role="tab" data-toggle="tab">2019-2023</a></li-->
            </ul>
            <div class="panel-body tab-content">
               <div class="tab-pane active" id="tab-first">
                  <div class="panel-body">
                     <div class="table-responsive">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                           <div class="dataTables_length" id="DataTables_Table_0_length">
                              <label>
                                 Show 
                                 <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-control">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                 </select>
                                 entries
                              </label>
                           </div>
                           <div id="DataTables_Table_0_filter" class="dataTables_filter">
                              <label>Search:
                              <input type="search" class="form-control " placeholder="" aria-controls="DataTables_Table_0">
                              </label>
                           </div>
                           <table align="center" border="1" class="table datatable table-bordered table-striped table-actions dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                              <thead>
                                 <tr>
                                    <!-- <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="id: activate to sort column ascending" style="width: 26px;">id</th> -->
                                    <th   rowspan="1" colspan="1"  style="width: 164px;">Student Name</th>
                                    <th   rowspan="1" colspan="1"  style="width: 94px;">Enrollment</th>
                                    <th   rowspan="1" colspan="1" style="width: 332px;">Company Name</th>
                                    <th   rowspan="1" colspan="1"  style="width: 332px;">Reference</th>
                                    <th   rowspan="1" colspan="1" style="width: 332px;">Photos</th>
                                    <th   rowspan="1" colspan="1"  style="width: 332px;">Certificate</th>
                                    <th   rowspan="1" colspan="1" style="width: 118px;">Report</th>
                                    <th   rowspan="1" colspan="1" style="width: 118px;">Update</th>
                                 </tr>
                                 <?php 
                                    $sql = "SELECT * from intenship ";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) 
                                    {
                                    
                                     while($row = mysqli_fetch_assoc($result)) {
                                       
                                       ?>
                                 <tr>
                                    <th>
                                       <?php 
                                          echo $row['studentName'];
                                          ?>
                                    </th>
                                    <th>
                                       <?php 
                                          echo $row['enroll'];
                                          ?>
                                    </th>
                                    <th>
                                       <?php 
                                          echo $row['name_of_company'];
                                          ?><br>
                                    </th>
                                    <th>
                                       <a href="<?php echo $row['Reference']; ?>" target="_blank">View</a>
                                    </th>
                                    <th>
                                       <a href="<?php echo $row['Photos']; ?>" target="_blank">View</a>
                                    </th>
                                    <br>
                                    <th>
                                       <a href="<?php echo $row['Certificate']; ?>" target="_blank">View</a>
                                    </th>
                                    <br>
                                    <th>
                                       <a href="<?php echo $row['Report']; ?>" target="_blank">View</a>
                                    </th>
                                    <br>
                                    <th>
                                       <!-- <form action="./Report/admin.php" method="post">  -->
                                       <!-- <tr>   -->
                                       <!-- <td width="50%" style="text-align: center">Admin</td>   -->
                                       <!-- <td><input type="submit" name="report" class="btn btn-success" value="Admin Report"/></td>   -->
                                       <!-- </tr> -->
                                       <!-- </form> -->
                                       <a href="update.php">Update</a>
                                    </th>
                                    <?php
                                       }
                                       }  else {
                                        echo "0";
                                       }
                                       
                                       
                                       ?>
                                 </tr>
                              </thead>
                              <tbody>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </form>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <?php
         include 'include/footer.php';
         include 'include/script.php';
         ?>
   </body>
</html>
</html>