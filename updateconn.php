<?php
session_start();
include("php/config.php");
$user_id = $_SESSION['enrollment_no'];
$studentName = $_SESSION['Name'];

// $_SESSION['student_id'] = $row_student['id'];
if (isset($_POST["update"])) {
    // echo $studentName;
    // exit(0);
    $Name_of_Company = $_POST['Name_of_Company'];
    $Address = $_POST['Address'];
    $Email = $_POST['Email'];
    $Country = $_POST['Country'];
    $State = $_POST['State'];
    $City = $_POST['City'];
    $Sem = $_POST['Sem'];
    $year = $_POST['year'];
    $Type_of_Internship = $_POST['Type_of_Intenship'];
    $Date_of_Joining = $_POST['Date_of_Joining'];
    $Date_of_Ending = $_POST['Date_of_Ending'];
    $Duration = mysqli_real_escape_string($conn,$_POST['Duration']);
    $Skills_Involved = $_POST['Skills_Involved'];
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

    $srno1 = $_POST['srno1'];
    $srno2 = $_POST['srno2'];
    $srno3 = $_POST['srno3'];
    $srno4 = $_POST['srno4'];
 
    if (isset($_FILES["Photos"]) && !empty($_FILES["Photos"]["tmp_name"])) {
        // Upload new image Photos
        $target_dir = "uploads/Photos/";
        $target_file = $target_dir . basename($_FILES["Photos"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
      
        // Rest of the code for uploading the Photos
        // Move uploaded Photos to target directory
        if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png") {
            
            echo "<script>
            alert('Sorry, only jpg, jpeg and png files are allowed.');
            window.location.href = 'update.php';
        </script>";
        
            // echo "Sorry, only pdf files are allowed.";
            exit(0);
        }    
        
        if (move_uploaded_file($_FILES["Photos"]["tmp_name"], $target_file)) {
            $image_path = $target_file;
        } else {
            echo "Sorry, there was an error uploading your file.";
            exit;
        }
    } else {
        $image_path = $target_file;
    
        }
  //Reference
  if (isset($_FILES["Reference"]) && !empty($_FILES["Reference"]["tmp_name"])) {
    // Upload new image Reference
    $target_dir1 = "uploads/Reference/";
    $target_file1 = $target_dir1 . basename($_FILES["Reference"]["name"]);
    $imageFileType1 = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
  
    // Rest of the code for uploading the Reference
    // Move uploaded Reference to target directory
    if ($imageFileType1 != "jpg" && $imageFileType1 != "jpeg" && $imageFileType1 != "png") {
        
        echo "<script>
        alert('Sorry, only jpg, jpeg and png files are allowed.');
        window.location.href = 'update.php';
    </script>";
    
        // echo "Sorry, only pdf files are allowed.";
        exit(0);
    }    
    
    if (move_uploaded_file($_FILES["Reference"]["tmp_name"], $target_file1)) {
        $image_path1 = $target_file1;
    } else {
        echo "Sorry, there was an error uploading your file.";
        exit;
    }
} else {
    // No new image was uploaded, keep existing Certificate file
    $image_path1 = $target_file1; // Initialize variable

    }
  
  //certificate
  if (isset($_FILES["Certificate"]) && !empty($_FILES["Certificate"]["tmp_name"])) {
    // Upload new image Certificate
    $target_dir2 = "uploads/Certificate/";
    $target_file2 = $target_dir2 . basename($_FILES["Certificate"]["name"]);
    $imageFileType2 = strtolower(pathinfo($target_file2, PATHINFO_EXTENSION));
  
    // Rest of the code for uploading the Certificate
    // Move uploaded Certificate to target directory
    if ($imageFileType2 != "pdf") {
        
        echo "<script>
        alert('Sorry, only pdf files are allowed.');
        window.location.href = 'update.php';
    </script>";
    
        // echo "Sorry, only pdf files are allowed.";
        exit(0);
    }    
    
    if (move_uploaded_file($_FILES["Certificate"]["tmp_name"], $target_file2)) {
        $image_path2 = $target_file2;
    } else {
        echo "Sorry, there was an error uploading your file.";
        exit;
    }
} else {
    // No new image was uploaded, keep existing Certificate file
    $image_path2 = $target_file2; // Initialize variable

    }

  
    //report
    if (isset($_FILES["Report"]) && !empty($_FILES["Report"]["tmp_name"])) {
        // Upload new image Report
        $target_dir5 = "uploads/Report/";
        $target_file5 = $target_dir5 . basename($_FILES["Report"]["name"]);
        $imageFileType5 = strtolower(pathinfo($target_file5, PATHINFO_EXTENSION));
      
        // Rest of the code for uploading the Report
        // Move uploaded Report to target directory
        if ($imageFileType5 != "pdf") {
            
            echo "<script>
            alert('Sorry, only pdf files are allowed.');
            window.location.href = 'update.php';
        </script>";
        
            // echo "Sorry, only pdf files are allowed.";
            exit(0);
        }    
        
        if (move_uploaded_file($_FILES["Report"]["tmp_name"], $target_file5)) {
            $image_path5 = $target_file5;
        } else {
            echo "Sorry, there was an error uploading your file.";
            exit;
        }
    } else {
        // No new image was uploaded, keep existing Certificate file
        $image_path5 = $target_file5; // Initialize variable
    
        }
      


        $internship = "UPDATE intenship set Type_of_Intenship='$Type_of_Internship',Date_of_Joining='$Date_of_Joining', Date_of_Ending='$Date_of_Ending',Sem='$Sem',year='$year',Duration='$Duration',Skills_Involved='$Skills_Involved', Photos='$image_path',Reference='$image_path1',Certificate='$image_path2',Report='$image_path5',name_of_company='$Name_of_Company', email='$Email', address='$Address',  country='$Country', state='$State',city= '$City' 
        where enroll='$user_id' ";
        // echo $internship;
        // exit(0);
        if (mysqli_query($conn, $internship)) {
            
            $id = "SELECT id FROM intenship WHERE enroll = '$user_id' and name_of_company = '$Name_of_Company'";
            $id_res = $conn->query($id);
            $row = mysqli_fetch_array($id_res,MYSQLI_ASSOC);

            $ind_id = $row['id'];

            $ind_details1 = "UPDATE industry_details set c_p_name='$Industry_Contact_Person_name1', c_p_designation='$Industry_Contact_Person_designation1', c_p_email='$Industry_Contact_Person_email1', c_p_phone='$Industry_Contact_Person_phone1' 
            where intenship_id='$ind_id' and srno='$srno1'";
            mysqli_query($conn,$ind_details1);

            $ind_details2 = "UPDATE industry_details set c_p_name='$Industry_Contact_Person_name2', c_p_designation='$Industry_Contact_Person_designation2', c_p_email='$Industry_Contact_Person_email2', c_p_phone='$Industry_Contact_Person_phone2' 
            where intenship_id='$ind_id' and srno='$srno2'";
            mysqli_query($conn,$ind_details2);

            $ind_details3 =  "UPDATE industry_details SET c_p_name='$Industry_Contact_Person_name3', c_p_designation='$Industry_Contact_Person_designation3', c_p_email='$Industry_Contact_Person_email3', c_p_phone='$Industry_Contact_Person_phone3' 
            where intenship_id='$ind_id' and srno='$srno3'";
            mysqli_query($conn,$ind_details3);
            $ind_details4 = "UPDATE industry_details SET c_p_name='$Industry_Contact_Person_name4', c_p_designation='$Industry_Contact_Person_designation4', c_p_email='$Industry_Contact_Person_email4', c_p_phone='$Industry_Contact_Person_phone4' 
                        where intenship_id='$ind_id' and srno='$srno4'";
            mysqli_query($conn,$ind_details4);

            // echo $ind_details1."</br>"."</br>";
            // echo $ind_details2."</br>"."</br>";
            // echo $ind_details3."</br>"."</br>";
            // echo $ind_details4."</br>"."</br>";
            // exit(0);

            header ("Location: demo.php");

        } 
        else{
            echo "failed to update";
        }
    }
    else{
        echo "failed";
    }
            mysqli_close($conn);
            

?>