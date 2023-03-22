<?php
session_start();
// include("../php/config.php");
// $enroll = $_GET['enroll'];
// echo $enroll;
     
     
          function fetch_data1()  
          {  
               $conn = mysqli_connect("localhost", "root", "", "student");  
               $enroll = $_GET['enroll'];
               
               $output_student = ''; 
               
        
            $sql = "SELECT * FROM mooc where enroll='$enroll'"; 
            
          //   echo $sql.'<br>';
               $result = mysqli_query($conn, $sql);  
               while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))  
              {       
               // echo $row["name_of_company"].'<br>'.$row["email"].'<br>';
                $output_student .= '<div>  
                             
                              <div>'.$row["studentName"].'</div>
                              <h2>Semester</h2>
                                <div>'.$row["Sem"].'</div>
                                <h2>Date</h2>
                                <div>'.$row["Date"].'</div>
                                <h2>Credit</h2>
                                <div>'.$row["Credit"].'</div>
                              <h2>Platform</h2>
                                <div>'.$row["platform"].'</div>
                                
                              
                                </div>';  
               }  
              
               return $output_student;  
         
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
               <h2 align="center"> Report of Mooc Course</h2><br /> 

               <div>';  
               $content .= fetch_data1(); 
            
               $content .= '</div>';  
              
               $obj_pdf->writeHTML($content); 
              
               $obj_pdf->Output('Report.pdf', 'I');  
          
     
?>


