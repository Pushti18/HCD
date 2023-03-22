<?php
   include('php/config.php');
   
   function test_input($data) {
   	
   	$data = trim($data);
   	$data = stripslashes($data);
   	$data = htmlspecialchars($data);
   	return $data;
   }
   
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
   	
   	$username = test_input($_POST["username"]);
   	$password = test_input($_POST["password"]);
   	$stmt = $conn->prepare("SELECT * FROM adminlogin");
   	$stmt->execute();
   	$resultSet = $stmt->get_result();
   	$users = $resultSet->fetch_all(MYSQLI_ASSOC);
   	
   	
   	foreach($users as $user) {
   		
   		if(($user['username'] == $username) &&
   			($user['password'] == $password)) {
   				// header("location: demoadmin.php");
   				header("location: admin_view_selectoption.php");
   		}
   		else {
   			echo "<script language='javascript'>";
   			echo "alert('WRONG INFORMATION')";
   			echo "</script>";
   			die();
   		}
   	}
   }
   
   ?>