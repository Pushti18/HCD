<?php
session_start();
// include("../php/config.php");
// $enroll = $_GET['enroll'];
// echo $enroll;
     
     
          function fetch_data1()  
          {  
               $conn = mysqli_connect("localhost", "root", "", "student");  
               $enroll = $_GET['enroll'];
               $noc = $_GET['noc'];
               $output_student = ''; 
               
        
            $sql = "SELECT * FROM intenship where enroll='$enroll' AND name_of_company = '$noc' "; 
            
          //   echo $sql.'<br>';
               $result = mysqli_query($conn, $sql);  
               while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))  
              {       
               // echo $row["name_of_company"].'<br>'.$row["email"].'<br>';
                $output_student .= '<div>  
                             
                              <div>'.$row["studentName"].'</div>
                              <h2>Semester</h2>
                                <div>'.$row["Sem"].'</div>
                                <h2>Passout Year</h2>
                                <div>'.$row["year"].'</div>
                                <h2>Duration</h2>
                                <div>'.$row["Duration"].'</div>
                              <h2>Name of Company</h2>
                                <div>'.$row["name_of_company"].'</div>
                                
                                <h2>Email </h2>
                                <div>'.$row["email"].'</div>
                                <h2>Company Address</h2>
                                <div>'.$row["address"].'</div>
                                <h2>Company Locaton</h2>
                                <div>'.$row["country"].','.$row["state"].','.$row["city"].'</div>
                                <h2>Type of Internship</h2>
                                <div>'.$row["Type_of_Intenship"].'</div>
                                <h2>Date of Joining and Ending</h2>
                                <div>'.$row["Date_of_Joining"].' to '.$row["Date_of_Ending"].'</div>
                                <h2>Skills Involved</h2>
                                <div>'.$row["Skills_Involved"].'</div>
                                
                              
                                </div>';  
               }  
              
               return $output_student;  
         
          }  
          function fetch_data2()  
          {  
               $enroll = $_GET['enroll'];
               $noc = $_GET['noc'];
               $id= $_GET['id'];
               $output_student1=''; 
               $conn = mysqli_connect("localhost", "root", "", "student");  
               $sql1 = "SELECT industry_details.*, intenship.id FROM industry_details INNER JOIN intenship ON industry_details.intenship_id=intenship.id where intenship_id='$id' and  enroll='$enroll' AND name_of_company = '$noc' ";  
//  echo $sql1;           
           $result1 = mysqli_query($conn, $sql1);
           $no = 1;  
       while($row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC)){

          // echo $row1["c_p_name"].'<br>'.$row1["c_p_designation"].'<br>'.$row1["c_p_email"].'<br>';
               $output_student1 .= '<div>  
               <h2>Industry Contact Person Name '.$no. '</h2>
               <div>'.$row1["c_p_name"].'</div>
               <h2>Industry Contact Person Designation'.$no.'</h2>
               <div>'.$row1["c_p_designation"].'</div>
               <h2>Industry Contact Person Email '.$no.'</h2>
               <div>'.$row1["c_p_email"].'</div>
               <h2>Industry Contact Person Phone No'.$no.'</h2>
               <div>'.$row1["c_p_phone"].'</div>
                         
                           </div>'; 
                           $no++; 
          }
          
          return $output_student1;
     }
               require_once('./tcpdf.php');  
               $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
               $obj_pdf->SetCreator(PDF_CREATOR);  
               $obj_pdf->SetTitle("Report");  
               $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
               $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
               $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
               $obj_pdf->SetDefaultMonospacedFont('helvetica');  
               $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
               $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT); 
               $obj_pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);  
               // $obj_pdf->Write ( 0, $txt );
               $obj_pdf->setImageScale ( PDF_IMAGE_SCALE_RATIO );
               $obj_pdf->setJPEGQuality ( 90 );
               $obj_pdf->Image ( "fs.jpg" );
               $obj_pdf->setPrintHeader(false);  
               $obj_pdf->setPrintFooter(false);  
               $obj_pdf->SetAutoPageBreak(TRUE, 10);  
               $obj_pdf->SetFont('helvetica', '', 11);  
               $obj_pdf->AddPage();  
               $content = '';  
               $content .= '  
               <h2 align="center"> Report of Intenship</h2><br /> 

               <div>';  
               $content .= fetch_data1().fetch_data2(); 
            
               $content .= '</div>';  
              
               $obj_pdf->writeHTML($content); 
              
               $obj_pdf->Output('Report.pdf', 'I');  
          
     
?>


