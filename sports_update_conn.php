<?php
session_start();
include("php/config.php");
$user_id = $_SESSION['enrollment_no'];
$studentName = $_SESSION['Name'];
// $_SESSION['student_id'] = $row_student['id'];
if (isset($_POST["update"])) {
    $Name_of_award = $_POST['Name_of_award'];
    $Date = $_POST['Date'];
    $year = $_POST['year'];
    $Team = $_POST['Team'];
    $level = $_POST['level'];
    $Name_of_Awarding_agency = $_POST['Name_of_Awarding_agency'];
    $contact_details = $_POST['contact_details'];
  
    if (isset($_FILES["receiving_photo"]) && !empty($_FILES["receiving_photo"]["tmp_name"])) {
        // Upload new image receiving_photo
        $target_dir2 = "uploads/sports/";
        $target_file2 = $target_dir2 . basename($_FILES["receiving_photo"]["name"]);
        $imageFileType2 = strtolower(pathinfo($target_file2, PATHINFO_EXTENSION));
      
        // Rest of the code for uploading the receiving_photo
        // Move uploaded receiving_photo to target directory
        if ($imageFileType2 != "jpg" && $imageFileType2 != "jpeg" && $imageFileType2 != "png") {
            
            echo "<script>
            alert('Sorry, only jpg, jpeg and png files are allowed.');
            window.location.href = 'sports_update.php';
        </script>";
        
            // echo "Sorry, only pdf files are allowed.";
            exit(0);
        }    
        
        if (move_uploaded_file($_FILES["receiving_photo"]["tmp_name"], $target_file2)) {
            $image_path2 = $target_file2;
        } else {
            echo "Sorry, there was an error uploading your file.";
            exit;
        }
    } else {
        // No new image was uploaded, keep existing Certificate file
        $image_path2 = $target_file2; // Initialize variable
    
        }
    
        if (isset($_FILES["photo"]) && !empty($_FILES["photo"]["tmp_name"])) {
            // Upload new image photo
            $target_dir = "uploads/sports/";
            $target_file = $target_dir . basename($_FILES["photo"]["name"]);
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
          
            // Rest of the code for uploading the photo
            // Move uploaded photo to target directory
            if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png") {
                
                echo "<script>
                alert('Sorry, only jpg, jpeg and png files are allowed.');
                window.location.href = 'sports_update.php';
            </script>";
            
                // echo "Sorry, only pdf files are allowed.";
                exit(0);
            }    
            
            if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
                $image_path = $target_file;
            } else {
                echo "Sorry, there was an error uploading your file.";
                exit;
            }
        } else {
            // No new image was uploaded, keep existing Certificate file
            $image_path = $target_file; // Initialize variable
        
            }
        $internship = "UPDATE sports set `name_of_award`='$Name_of_award', `date`='$Date', `year`='$year', `team`='$Team', `level`='$level', `name_of_agency`='$Name_of_Awarding_agency', `contact_details`='$contact_details', `photo_of_award`='$image_path', `receiving_award`='$image_path2' where `enroll`='$user_id' ";
        // echo $internship;
        // exit(0);
        if (mysqli_query($conn, $internship)) {
            $id = "SELECT id FROM sports WHERE enroll = '$user_id''";
            $id_res = $conn->query($id);
            $row = mysqli_fetch_array($id_res,MYSQLI_ASSOC);

            $ind_id = $row['id'];
            header ("Location: sports.php");
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