<?php
session_start();
include("php/config.php");
$user_id = $_SESSION['enrollment_no'];
$studentName = $_SESSION['Name'];

// $_SESSION['student_id'] = $row_student['id'];
if (isset($_POST["submit"])) {
    // echo $studentName;
    // exit(0);
    $Name_of_Company = $_POST['Name_of_Company'];
    $Address = $_POST['Address'];
    $Email = $_POST['Email'];
    $Country = $_POST['Country'];
    $State = $_POST['State'];
    $City = $_POST['City'];
    $Type_of_Internship = $_POST['Type_of_Intenship'];
    $Date_of_Joining = $_POST['Date_of_Joining'];
    $Date_of_Ending = $_POST['Date_of_Ending'];
    $Duration = mysqli_real_escape_string($conn,$_POST['Duration']);
    $Skills_Involved = $_POST['Skills_Involved'];
    $Sem = $_POST['Sem'];
    $year = $_POST['year'];
    // echo "hi";
    // echo $Skills_Involved;
    // exit(0);
    if($_POST["Duration1"] != ""){
        $Duration = $_POST["Duration1"];
    }

    if($_POST["Skills_Involved1"] != ""){
        $Skills_Involved = $_POST["Skills_Involved1"];
    }

    $Industry_Contact_Person_name1 = $_POST['Industry_Contact_Person_name1'];
    $Industry_Contact_Person_designation1 = $_POST['Industry_Contact_Person_designation1'];
    $Industry_Contact_Person_email1 = $_POST['Industry_Contact_Person_email1'];
    $Industry_Contact_Person_phone1 = $_POST['Industry_Contact_Person_phone1'];

    $Industry_Contact_Person_name2 = $_POST['Industry_Contact_Person_name2'];
    $Industry_Contact_Person_designation2 = $_POST['Industry_Contact_Person_designation2'];
    $Industry_Contact_Person_email2 = $_POST['Industry_Contact_Person_email2'];
    $Industry_Contact_Person_phone2 = $_POST['Industry_Contact_Person_phone2'];

    $Industry_Contact_Person_name3 = $_POST['Industry_Contact_Person_name3'];
    $Industry_Contact_Person_designation3 = $_POST['Industry_Contact_Person_designation3'];
    $Industry_Contact_Person_email3 = $_POST['Industry_Contact_Person_email3'];
    $Industry_Contact_Person_phone3 = $_POST['Industry_Contact_Person_phone3'];

    $Industry_Contact_Person_name4 = $_POST['Industry_Contact_Person_name4'];
    $Industry_Contact_Person_designation4 = $_POST['Industry_Contact_Person_designation4'];
    $Industry_Contact_Person_email4 = $_POST['Industry_Contact_Person_email4'];
    $Industry_Contact_Person_phone4 = $_POST['Industry_Contact_Person_phone4'];

    // Upload image file
    // $target_dir = "uploads/";
    // $target_file = $target_dir . basename($_FILES["file"]["name"]);
    // $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if (isset($_FILES["file"])) {
      // Upload image file
      $target_dir = "uploads/Photos/";
      $target_file = $target_dir . basename($_FILES["file"]["name"]);
      $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
  
      // Rest of the code for uploading the file
  } else {
      echo "No file was uploaded.";
      exit;
  }
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if ($check === false) {
        echo "File is not an image.";
        exit;
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        exit;
    }

    // Check file size
    // if ($_FILES["file"]["size"] > 500000) {
    //     echo "Sorry, your file is too large.";
    //     exit;
    // }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png") {
        echo "Sorry, only JPG, JPEG, and PNG files are allowed.";
        exit;
    }

    // Move uploaded file to target directory
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        $image_path = $target_file;
    } else {
        echo "Sorry, there was an error uploading your file.";
        exit;
    }

//Reference
if (isset($_FILES["Reference"])) {
  // Upload image Reference
  $target_dir1 = "uploads/Reference/";
  $target_file1 = $target_dir1 . basename($_FILES["Reference"]["name"]);
  $imageFileType1 = strtolower(pathinfo($target_file1, PATHINFO_EXTENSION));

  // Rest of the code for uploading the Reference
} else {
  echo "No Reference was uploaded.";
  exit;
}
// Check if image Reference is a actual image or fake image
$check1 = getimagesize($_FILES["Reference"]["tmp_name"]);
if ($check1 === false) {
    echo "Reference is not an image.";
    exit;
}

// Check if Reference already exists
if (file_exists($target_file1)) {
    echo "Sorry, Reference already exists.";
    exit;
}

// Check Reference size
// if ($_FILES["Reference"]["size"] > 500000) {
//     echo "Sorry, your Reference is too large.";
//     exit;
// }

// Allow certain Reference formats
if ($imageFileType1 != "jpg" && $imageFileType1 != "jpeg" && $imageFileType1 != "png") {
    echo "Sorry, only JPG, JPEG, and PNG files are allowed.";
    exit;
}

// Move uploaded Reference to target directory
if (move_uploaded_file($_FILES["Reference"]["tmp_name"], $target_file1)) {
    $image_path1 = $target_file1;
} else {
    echo "Sorry, there was an error uploading your file.";
    exit;
}


//certificate
if (isset($_FILES["Certificate"])) {
    // Upload image Certificate
    $target_dir2 = "uploads/Certificate/";
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
  



  //report
if (isset($_FILES["Report"])) {
    // Upload image Report
    $target_dir5 = "uploads/Report/";
    $target_file5 = $target_dir5 . basename($_FILES["Report"]["name"]);
    $imageFileType5 = strtolower(pathinfo($target_file5, PATHINFO_EXTENSION));
  
    // Rest of the code for uploading the Report
  } else {
    echo "No Report was uploaded.";
    exit;
  }
  // Check if image Report is a actual image or fake image
  
  
  // Check if Report already exists
  if (file_exists($target_file5)) {
      echo "Sorry, Report already exists.";
      exit;
  }
  
  // Check Report size
  // if ($_FILES["Report"]["size"] > 500000) {
  //     echo "Sorry, your Report is too large.";
  //     exit;
  // }
  
  // Allow certain Report formats
  if ($imageFileType5 != "pdf") {
      echo "Sorry, only JPG, JPEG, and PNG files are allowed.";
      exit;
  }
  
  // Move uploaded Report to target directory
  if (move_uploaded_file($_FILES["Report"]["tmp_name"], $target_file5)) {
      $image_path5 = $target_file5;
  } else {
      echo "Sorry, there was an error uploading your file.";
      exit;
  }
  
    // echo $user_id;
    // exit(0);


    // $sql = "INSERT INTO ind_info (name_of_company, email, address, country, state, city) VALUES ('$Name_of_Company', '$Email', '$Address', '$Country', '$State', '$City')";
    // if ($conn->query($sql) === true) {
    //     $ind_id = mysqli_insert_id($conn);

        $internship = "INSERT INTO intenship (enroll,studentName, Type_of_Intenship, Date_of_Joining, Date_of_Ending,Sem,year,Duration,Skills_Involved, Photos,Reference,Certificate,Report,name_of_company, email, address, country, state, city) 
        VALUES ('$user_id','$studentName','$Type_of_Internship', '$Date_of_Joining', '$Date_of_Ending','$Sem','$year','$Duration', '$Skills_Involved', '$image_path','$image_path1','$image_path2','$image_path5','$Name_of_Company', '$Email', '$Address', '$Country', '$State', '$City')";
        echo $internship;
        // exit(0);
        if (mysqli_query($conn, $internship)) {
            

            $id = "SELECT id FROM intenship WHERE enroll = '$user_id' and name_of_company = '$Name_of_Company'";
            $id_res = $conn->query($id);

            $row = mysqli_fetch_array($id_res,MYSQLI_ASSOC);

            $ind_id = $row['id'];

            $ind_details1 = "INSERT INTO industry_details (intenship_id, ind_email, c_p_name, c_p_designation, c_p_email, c_p_phone) 
            VALUES('$ind_id','$Email','$Industry_Contact_Person_name1','$Industry_Contact_Person_designation1','$Industry_Contact_Person_email1','$Industry_Contact_Person_phone1')";
            mysqli_query($conn,$ind_details1);

            $ind_details2 = "INSERT INTO industry_details (intenship_id,ind_email, c_p_name, c_p_designation, c_p_email, c_p_phone) 
            VALUES('$ind_id','$Email','$Industry_Contact_Person_name2','$Industry_Contact_Person_designation2','$Industry_Contact_Person_email2','$Industry_Contact_Person_phone2')";
            mysqli_query($conn,$ind_details2);

            $ind_details3 =  "INSERT INTO industry_details (intenship_id,ind_email, c_p_name, c_p_designation, c_p_email, c_p_phone) 
            VALUES('$ind_id','$Email','$Industry_Contact_Person_name3','$Industry_Contact_Person_designation3','$Industry_Contact_Person_email3','$Industry_Contact_Person_phone3')";
            mysqli_query($conn,$ind_details3);
            $ind_details4 = "INSERT INTO industry_details (intenship_id,ind_email, c_p_name, c_p_designation, c_p_email, c_p_phone) 
                        VALUES('$ind_id','$Email','$Industry_Contact_Person_name4','$Industry_Contact_Person_designation4','$Industry_Contact_Person_email4','$Industry_Contact_Person_phone4')";
            mysqli_query($conn,$ind_details4);
            header ("Location: demo.php");

           

            echo $ind_details1."</br>";
            echo $ind_details2."</br>";
            echo $ind_details3."</br>";
            echo $ind_details4."</br>";
            exit(0);


            // $ind_details1 = "INSERT INTO industry_details (ind_email, c_p_name, c_p_designation, c_p_email, c_p_phone) VALUES ('$Email', '$Industry_Contact_Person_name1', '$Industry_Contact_Person_designation1', '$Industry_Contact_Person_email1', '$Industry_Contact_Person_phone1')";mysqli_query($conn,$ind_details1);
            // $ind_details2 = "INSERT INTO industry_details (ind_email, c_p_name, c_p_designation, c_p_email, c_p_phone) VALUES ('$Email', '$Industry_Contact_Person_name2', '$Industry_Contact_Person_designation2', '$Industry_Contact_Person_email2', '$Industry_Contact_Person_phone2')";mysqli_query($conn,$ind_details2);
            // $ind_details3 = "INSERT INTO industry_details (ind_email, c_p_name, c_p_designation, c_p_email, c_p_phone) VALUES ('$Email', '$Industry_Contact_Person_name3', '$Industry_Contact_Person_designation3', '$Industry_Contact_Person_email3', '$Industry_Contact_Person_phone3')";mysqli_query($conn,$ind_details3);
            // $ind_details4 = "INSERT INTO industry_details (ind_email, c_p_name, c_p_designation, c_p_email, c_p_phone) VALUES ('$Email', '$Industry_Contact_Person_name4', '$Industry_Contact_Person_designation4', '$Industry_Contact_Person_email4', '$Industry_Contact_Person_phone4')";mysqli_query($conn,$ind_details4);
            
        } 
    }
            mysqli_close($conn);
            

?>