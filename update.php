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
	<title>Intenship Form</title>
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

<?php
  include("include/simple_header.php");
  ?> 
</head>
<body><br><br><br>
  <h1 align="center">Intenship Form</h1>
<table align="center" >
  
	<form method="post" action="updateconn.php" enctype="multipart/form-data"  >
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

<?php
  $sql = "SELECT industry_details.*, intenship.* from intenship inner join industry_details on industry_details.intenship_id=intenship.id where enroll='$user_id'";
  $result = mysqli_query($conn,$sql);

  $sql1 = "SELECT industry_details.*, intenship.* from intenship inner join industry_details on industry_details.intenship_id=intenship.id where enroll='$user_id'";
  $result1 = mysqli_query($conn,$sql1);
  //$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  //$while = $row;
 
  while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
    // echo $row['enroll'];

?>
  <tr>
  <td>
		<label for="name" ><i class="fa fa-user icon " aria-hidden="true">&nbsp; &nbsp;Name of Company:<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(as per website)</i></label>
</td>
<td>
		<input type="text" id="Name_of_Company" name="Name_of_Company" value="<?php echo $row['name_of_company']?>" required><br><br>
</td>
<tr>
<td>
		<label for="address" ><i class="fa fa-address-card " aria-hidden="true">&nbsp;&nbsp;&nbsp;Address:</i></label>
</td>
<td>
		<input type="text" id="address" name="Address" required rows="4" cols="30" value="<?php echo $row['address']?>"><br><br>
</td>
</tr>
<tr>
    <td>
		<label for="email"><i class="fa fa-envelope " aria-hidden="true">&nbsp;&nbsp;&nbsp;Email:</i></label>
</td>
<td>
        <input type="text" name="Email" class="email" tabindex=2 value="<?php echo $row['email']?>" /><br><br>
</td>
<tr>
    <td>
		<label for="country"><i class="fa fa-globe " aria-hidden="true">&nbsp;&nbsp;&nbsp;Country:</i></label>
</td>
<td>
<select name="Country" class="countries form-control" id="countryId">
    <option value="">Select Country</option>
</select>
		<!-- <input type="text" id="country" name="country" required><br><br> -->
</td>
</tr>
</tr>
<tr>
<td>
		<label for="state"><i class="fa fa-globe " aria-hidden="true">&nbsp;&nbsp;&nbsp;State:</i></label>
</td>
<td>
<select name="State" class="states form-control" id="stateId">
    <option value="">Select State</option>
</select>
		<!-- <input type="text" id="state" name="state" required><br><br> -->
</td>
</tr>
		<!-- <input type="email" id="email" name="email" required><br><br> -->
		<tr>
            <td>
		<label for="city"><i class="fa fa-globe " aria-hidden="true">&nbsp;&nbsp;&nbsp;City:</i></label>
</td>
<td>
<select name="City" class="cities form-control" id="cityId">
    <option value="">Select City</option>
</select>
		<!-- <input type="text" id="city" name="city" required><br><br> -->
</td>
</tr>


<tr>
    <td>
        <label for ="Type" ><i class="fa fa-bars " aria-hidden="true">&nbsp;&nbsp;&nbsp;Type of Internship:</i></label>
</td>
<td>
<input type="radio" name="Type_of_Intenship" value="National" <?php if($row['Type_of_Intenship']=="National"){ echo "checked"; }?> />NATIONAL
        <!-- <input type="radio" id="national" name="Type_of_Intenship"/>NATIONAL -->
        
        <input type="radio" name="Type_of_Intenship" value="International" <?php if($row['Type_of_Intenship']=="International"){ echo "checked"; }?> />INTERNATIONAL 
</td>

</tr>
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
    <label for="joining_date"><i class="fa fa-calendar-check-o " aria-hidden="true">&nbsp;&nbsp;&nbsp;Date of Joining:</i></label>
</td>
<td>
		<input type="date" id="joining_date" name="Date_of_Joining" required value="<?php echo $row['Date_of_Joining']?>">
</td>
</tr>
<tr>
		<td>
		<label for="ending_date"><i class="fa fa-calendar-times-o " aria-hidden="true">&nbsp;&nbsp;&nbsp;Date of Ending:</i></label>
</td>
<td>
		<input type="date" id="ending_date" name="Date_of_Ending" required value="<?php echo $row['Date_of_Ending']?>">
</td>
</tr>
<tr>
            <td>
		
        <label for="ending_date"><i class="fa fa-file " aria-hidden="true">&nbsp;&nbsp;&nbsp;Sem:</i></label><br>  
</td>
<td>
  <select name="Sem" value="<?php echo $row['Sem']?>" >
    
 
       
        <option value="Sem 1" <?php if($row['Sem']=="Sem 1"){ echo "selected"; }?>><br>
        Sem 1</option>
        <option value="Sem 2" <?php if($row['Sem']=="Sem 2"){ echo "selected"; }?>><br>
        Sem 2</option>
        <option value="Sem 3" <?php if($row['Sem']=="Sem 3"){ echo "selected"; }?>><br>
        Sem 3</option>
        <option value="Sem 4" <?php if($row['Sem']=="Sem 4"){ echo "selected"; }?>><br>
        Sem 4</option>
        <option  value="Sem 5" <?php if($row['Sem']=="Sem 5"){ echo "selected"; }?>><br>
        Sem 5</option>
  <option  value="Sem 6" <?php if($row['Sem']=="Sem 6"){ echo "selected"; }?>><br>
  Sem 6</option>
  <option  value="Sem 7" <?php if($row['Sem']=="Sem 7"){ echo "selected"; }?>><br>
  Sem 7</option>
  <option  value="Sem 8" <?php if($row['Sem']=="Sem 8"){ echo "selected"; }?>><br>
  Sem 8</option>
    </select><br><br>
</td>

</tr> 
<tr>
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

</tr>
		<tr>
            <td>
		
        <label for="ending_date"><i class="fa fa-calendar " aria-hidden="true">&nbsp;&nbsp;&nbsp;Duration:</i></label><br>   
</td>
<td>
  <select name="Duration" checked="<?php echo $row['Duration']?>">
    
 
       
        <option value="1 MONTH" <?php if($row['Duration']=="1 MONTH"){ echo "selected"; }?> ><br>
  1 MONTH</option>
        <option value="2 MONTH" <?php if($row['Duration']=="2 MONTH"){ echo "selected"; }?>><br>
  2 MONTH'S</option>
        <option value="3 MONTH" <?php if($row['Duration']=="3 MONTH"){ echo "selected"; }?>><br>
  3 MONTH'S</option>
        <option value="6 MONTH" <?php if($row['Duration']=="6 MONTH"){ echo "selected"; }?>><br>
  6 MONTH'S</option>
        <option  value="2 WEEK'S"  <?php if($row['Duration']=="2 WEEK"){ echo "selected"; }?>><br>
  2 WEEK'S</option>
  <option  value="3 WEEK'S" <?php if($row['Duration']=="3 WEEK"){ echo "selected"; }?>><br>
  3 WEEK'S</option>
  <option  value="6 WEEK'S" <?php if($row['Duration']=="6 WEEK"){ echo "selected"; }?>><br>
  6 WEEK'S</option>
    </select><br><br>
  Other
  <input type="text" name="Duration1" maxlength="30"  />
</td>

</tr> 
<tr>
    <td>
  <label ><i class="fa fa-bookmark " aria-hidden="true">&nbsp;&nbsp;&nbsp;Skills Involved:</i></label>
</td>
  <td>
  
    CRITICAL THINKING
     <input type="radio" name="Skills_Involved" value="CRITICAL THINKING" <?php if($row['Skills_Involved']=="CRITICAL THINKING"){ echo "checked"; }?>/><br>
     SELF-MANAGEMENT
     <input type="radio" name="Skills_Involved" value="SELF-MANAGEMENT" <?php if($row['Skills_Involved']=="SELF-MANAGEMENT"){ echo "checked"; }?>/><br>
     QUICK LEARNING
     <input type="radio" name="Skills_Involved"  value="QUICK LEARNING" <?php if($row['Skills_Involved']=="QUICK LEARNING"){ echo "checked"; }?>/><br>
     COMMUNICATION
     <input type="radio" name="Skills_Involved" value="COMMUNICATION" <?php if($row['Skills_Involved']=="COMMUNICATION"){ echo "checked"; }?>/><br>
     ADAPTABILITY
     <input type="radio" name="Skills_Involved" value="ADAPTABILITY" <?php if($row['Skills_Involved']=="ADAPTABILITY"){ echo "checked"; }?> /><br>
     All Of The Above
     <input type="radio" name="Skills_Involved" value="All Of the Above" <?php if($row['Skills_Involved']=="All Of the Above"){ echo "checked"; }?>/><br>
      OTHER:
      <Input  type="text" name="Skills_Involved1" value=""/>
</td>
</tr>
<tr>
    <td>
<label for="file"><i class="fa fa-cloud-upload " aria-hidden="true">&nbsp;&nbsp;&nbsp;Attachments:</i></label><br>
</td>
<td>
		<label for="file">Reference:</label>
		<input type="file"  name="Reference" id="file" > <br><br>
    <!-- <label><?php echo $row['Reference'];?></label><br><br> -->
    
        <label for="file">Photos:</label>
        <input type="file"  name="Photos" id="file" > <br><br>
		<!-- <label><?php echo $row['Photos'];?></label><br><br> -->
    <!-- <input type="text"   ><br><br> -->
  
        <label for="file">Certificate:</label>
		<input type="file"  name="Certificate" id="file" ><br><br> 

    <label for="file">Report:</label>
		<input type="file"  name="Report" id="file" ><br><br>
</td>
</tr>
  
  <?php
  break;
}
?>
<!-- </table>
<table> -->
<tr>
  <td><i class="fa fa-file-text-o " aria-hidden="true">&nbsp;&nbsp;&nbsp;Industry Contact &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Person:</i><br /><br /><br /><br /><br /><br /><br /></td>
  <td>
<table>
 
   <br></br>
  <tr>
  <td align="center"><b>Sr.No.</b></td>
  <td align="center"><b>NAME</b></td>
  <td align="center"><b>DESIGNATION</b></td>
  <td align="center"><b>EMAIL</b></td>
  <td align="center"><b>MOBILE NO</b></td>
  </tr>

<?php 
$abc = 1;
  while ($while1 = mysqli_fetch_array($result1,MYSQLI_ASSOC)) {
    ?>
   
  <tr>
  <!-- <td><?php echo $abc; ?></td> -->
  <!-- <td></td> -->
  <td><input type="text" type="hidden" name="srno<?php echo $abc;?>" maxlength="30" value="<?php echo $while1['srno']?>" /></td>
  <td><input type="text" name = "<?php echo 'Industry_Contact_Person_name'.$abc;?>" maxlength="30" value="<?php echo $while1['c_p_name']?>" /></td>
  <td><input type="text" name = "<?php echo 'Industry_Contact_Person_designation'.$abc;?>" maxlength="30" value="<?php echo $while1['c_p_designation']?>"/></td>
  <td><input type="text" name = "<?php echo 'Industry_Contact_Person_email'.$abc;?>" maxlength="30" value="<?php echo $while1['c_p_email']?>"/></td>
  <td><input type="text" name = "<?php echo 'Industry_Contact_Person_phone'.$abc;?>" maxlength="30" value="<?php echo $while1['c_p_phone']?>" /></td>
  </tr>   
<?php
$abc = $abc+1;

  }


?>
 </td>
  </tr>

  
</tr>

</table>
<input type="submit" value="update"  name= "update">
</table>
</form>
  
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-149371669-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-149371669-1');
</script>

    
</body>

</html>


<?php
if(isset($_POST))
{
	
	// $name  = $_POST['name'];
	// $email = $_POST['email'];
	// $id =    $_POST['id'];
	$Reference = "";
	
	if(isset($_FILES) && !empty($_FILES))
	{
		$filename = $_FILES["Reference"]["name"];
		$Reference = "uploads/Reference".$filename;
		if(move_uploaded_file($_FILES["Reference"]["tmp_name"], $Reference))
		{
			
		}else{
		$Reference = $_POST['Reference'];
		}		
	}
	
	$servername = "localhost";
	$database = "student";
	$username = "root";
	$password = "";

	// Create connection
	$conn = new mysqli($servername, $username, $password,$database);

	// Check connection
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}

	// write sql query for inserting data into users table.	
	// $sql = "update intenship set  name = '$name', email = '$email' , Reference ='$Reference' where id = '$id'";

	// if ($conn->query($sql) === TRUE) {
	// header("Location:user_list.php?q=update");
	// } else {
	// echo "Error: " . $sql . "<br>" . $conn->error;
	// }
	// $conn->close();

} 
?>