<?php
   session_start();
   include("php/config.php");
   
    
   $user_id = $_SESSION['std_en_no'];
   $studentName = $_SESSION['studentName'];
   // $_SESSION['student_id'] = $row_student['id'];
   if (isset($_POST["submit"])) {
    
       $Date_of_Joining = $_POST['Date_of_Joining'];
       // $Date_of_Ending = $_POST['Date_of_Ending'];
       $Duration = mysqli_real_escape_string($conn,$_POST['Duration']);
       $Skills_Involved = $_POST['Skills_Involved'];
       $Sem = $_POST['Sem'];
     
       if($_POST["Skills_Involved1"] != ""){
           $Skills_Involved = $_POST["Skills_Involved1"];
       }
   
 
   //certificate
   if (isset($_FILES["Certificate"])) {
       // Upload image Certificate
       $target_dir2 = "uploads/Mooc/";
       $target_file2 = $target_dir2 . basename($_FILES["Certificate"]["name"]);
       $imageFileType2 = strtolower(pathinfo($target_file2, PATHINFO_EXTENSION));
     
       // Rest of the code for uploading the Certificate
     } else {
       echo "No Certificate was uploaded.";
       exit;
     }
     // Check if image Certificate is a actual image or fake image
     
     
     // Check if Certificate already exists
     if (file_exists($target_file2)) {
         echo "Sorry, Certificate already exists.";
         exit;
     }
     
     // Check Certificate size
     // if ($_FILES["Certificate"]["size"] > 500000) {
     //     echo "Sorry, your Certificate is too large.";
     //     exit;
     // }
     
     // Allow certain Certificate formats
     if ($imageFileType2 != "pdf") {
         echo "Sorry, only JPG, JPEG, and PNG files are allowed.";
         exit;
     }
     
     // Move uploaded Certificate to target directory
     if (move_uploaded_file($_FILES["Certificate"]["tmp_name"], $target_file2)) {
         $image_path2 = $target_file2;
     } else {
         echo "Sorry, there was an error uploading your file.";
         exit;
     }
     
 
           $internship = "INSERT INTO mooc (enroll,studentName, Date, Sem, Credit,platform,certificate) 
           VALUES ('$user_id','$studentName','$Date_of_Joining','$Sem','$Duration', '$Skills_Involved', '$image_path2')";
           // echo $internship;
           // exit(0);
           if (mysqli_query($conn, $internship)) {
               
   
               $id = "SELECT id FROM mooc WHERE enroll = '$user_id'  ";
               $id_res = $conn->query($id);
   
               $row = mysqli_fetch_array($id_res,MYSQLI_ASSOC);
   
               // $ind_id = $row['id'];
   
               
               header ("Location: demoadmin_mooc.php");
   
           } 
       }
               mysqli_close($conn);
               
   
   ?>