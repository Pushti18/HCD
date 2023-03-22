<?php
session_start();
include("php/config.php");
$user_id = $_SESSION['enrollment_no'];
$studentName = $_SESSION['Name'];

// $_SESSION['student_id'] = $row_student['id'];
if (isset($_POST["submit"])) {
    // echo $studentName;
    // exit(0);
    $Name_of_award = $_POST['Name_of_award'];
    $Date = $_POST['Date'];
    $year = $_POST['year'];
    $Team = $_POST['Team'];
    $level = $_POST['level'];
    $Name_of_Awarding_agency = $_POST['Name_of_Awarding_agency'];
    $contact_details = $_POST['contact_details'];
    // $photo = $_POST['photo'];
    // $receiving_photo = $_POST['receiving_photo'];
   
   
   

//certificate
if (isset($_FILES["receiving_photo"])) {
    // Upload image Certificate
    $target_dir2 = "uploads/sports/";
    $target_file2 = $target_dir2 . basename($_FILES["receiving_photo"]["name"]);
    $imageFileType2 = strtolower(pathinfo($target_file2, PATHINFO_EXTENSION));
  
    // Rest of the code for uploading the receiving_photo
  } else {
    echo "No receiving_photo was uploaded.";
    exit;
  }
  // Check if image receiving_photo is a actual image or fake image
  
  
  // Check if receiving_photo already exists
//   if (file_exists($target_file2)) {
//       echo "Sorry, receiving_photo already exists.";
//       exit;
//   }
  
  // Check receiving_photo size
  // if ($_FILES["receiving_photo"]["size"] > 500000) {
  //     echo "Sorry, your receiving_photo is too large.";
  //     exit;
  // }
  
  // Allow certain receiving_photo formats
  if ($imageFileType2 != "jpg" && $imageFileType2 != "jpeg" && $imageFileType2 != "png") {
      echo "Sorry, only JPG, JPEG, and PNG files are allowed.";
      exit;
  }
  
  // Move uploaded receiving_photo to target directory
  if (move_uploaded_file($_FILES["receiving_photo"]["tmp_name"], $target_file2)) {
      $image_path2 = $target_file2;
  } else {
      echo "Sorry, there was an error uploading your file.";
      exit;
  }

  //photos
if (isset($_FILES["photo"])) {
    // Upload image Certificate
    $target_dir = "uploads/sports/";
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
  
    // Rest of the code for uploading the photo
  } else {
    echo "No photo was uploaded.";
    exit;
  }
  // Check if image photo is a actual image or fake image
  
  
  // Check if photo already exists
//   if (file_exists($target_file)) {
//       echo "Sorry, photo already exists.";
//       exit;
//   }
  
  // Check photo size
  // if ($_FILES["photo"]["size"] > 500000) {
  //     echo "Sorry, your photo is too large.";
  //     exit;
  // }
  
  // Allow certain photo formats
  if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png") {
      echo "Sorry, only JPG, JPEG, and PNG files are allowed.";
      exit;
  }
  
  // Move uploaded photo to target directory
  if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
      $image_path = $target_file;
  } else {
      echo "Sorry, there was an error uploading your file.";
      exit;
  }
 

        $internship = "INSERT INTO sports (enroll,studentName,name_of_award,date,year,team,level,name_of_agency,contact_details,photo_of_award,receiving_award) 
        VALUES ('$user_id','$studentName','$Name_of_award','$Date','$year','$Team','$level','$Name_of_Awarding_agency','$contact_details','$image_path', '$image_path2')";
        echo $internship;
        // exit(0);
        if (mysqli_query($conn, $internship)) {
            

            $id = "SELECT id FROM sports WHERE enroll = '$user_id'  ";
            $id_res = $conn->query($id);

            $row = mysqli_fetch_array($id_res,MYSQLI_ASSOC);

            // $ind_id = $row['id'];
// echo "hi";
            
            header ("Location: sports.php");

        } 
    }
            mysqli_close($conn);
            

?>