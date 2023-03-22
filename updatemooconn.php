<?php
session_start();
include("php/config.php");
$user_id = $_SESSION['enrollment_no'];
$studentName = $_SESSION['Name'];

// $_SESSION['student_id'] = $row_student['id'];
if (isset($_POST["update"])) {
    $Date_of_Joining = $_POST['Date_of_Joining'];
    $Duration = mysqli_real_escape_string($conn,$_POST['Duration']);
    $Skills_Involved = $_POST['Skills_Involved'];
    $Sem = $_POST['Sem'];
  //certificate
  if (isset($_FILES["Certificate"]) && !empty($_FILES["Certificate"]["tmp_name"])) {
    // Upload new image Certificate
    $target_dir2 = "uploads/Mooc/";
    $target_file2 = $target_dir2 . basename($_FILES["Certificate"]["name"]);
    $imageFileType2 = strtolower(pathinfo($target_file2, PATHINFO_EXTENSION));
  
    // Rest of the code for uploading the Certificate
    // Move uploaded Certificate to target directory
    if ($imageFileType2 != "pdf") {
        
        echo "<script>
        alert('Sorry, only pdf files are allowed.');
        window.location.href = 'updatemooc.php';
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
        $internship = "UPDATE mooc set `Date`='$Date_of_Joining', `Sem`='$Sem', `Credit`='$Duration', `platform`='$Skills_Involved', `Certificate`='$image_path2' where `enroll`='$user_id' ";
        // echo $internship;
        // exit(0);
        if (mysqli_query($conn, $internship)) {
            $id = "SELECT id FROM mooc WHERE enroll = '$user_id''";
            $id_res = $conn->query($id);
            $row = mysqli_fetch_array($id_res,MYSQLI_ASSOC);

            $ind_id = $row['id'];
            header ("Location: mooc.php");
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