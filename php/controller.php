<?php
session_start();
include("config.php");

if(isset($_POST["enrollment_no"])) {
    $enroll = $_POST['enrollment_no'];
    $search_student = "SELECT * FROM login Where en_roll = $enroll";
    $result = $conn->query($search_student);
    if ($result->num_rows > 0) {
        $row_student = $result->fetch_assoc();
        $_SESSION['student_id'] = $row_student['id'];
        $_SESSION['enrollment_no']=$row_student['en_roll'];
        $_SESSION['Name']=$row_student['studentName'];
        // echo $row_student['studentName'];
      
        header("Location: ../selectdropdown.php");
    }
    else {
        $_SESSION['wrong_enno'] = true;
        header("Location: ../login.php");
    } 
    
} 


?>