<?php
session_start();
$con = mysqli_connect('localhost','root','','student');

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Writer\Xls;
use PhpOffice\PhpSpreadsheet\Writer\Csv;

if(isset($_POST['export_excel_btn']))
{
    $file_ext_name = $_POST['export_file_type'];
    $fileName = "Internshi_Records";

    $student = "SELECT * FROM intenship";
    $query_run = mysqli_query($con, $student);

    if(mysqli_num_rows($query_run) > 0)
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue('A1', 'ID');
        $sheet->setCellValue('B1', 'Student Name');
        $sheet->setCellValue('C1', 'Enrollment No');
        $sheet->setCellValue('D1', 'Name of Company');
        $sheet->setCellValue('E1', 'Email');
        $sheet->setCellValue('F1', 'Address');
        $sheet->setCellValue('G1', 'Country');
        $sheet->setCellValue('H1', 'State');
        $sheet->setCellValue('I1', 'City');
        $sheet->setCellValue('J1', 'Type_of_Intenship');
        $sheet->setCellValue('K1', 'Date_of_Joining');
        $sheet->setCellValue('L1', 'Date_of_Ending');
        $sheet->setCellValue('M1', 'Sem');
        $sheet->setCellValue('N1', 'Year');
        $sheet->setCellValue('O1', 'Duration');
        $sheet->setCellValue('P1', 'Skill Involved');
        


        $rowCount = 2;
        foreach($query_run as $data)
        {
            $sheet->setCellValue('A'.$rowCount, $data['id']);
            $sheet->setCellValue('B'.$rowCount, $data['studentName']);
            $sheet->setCellValue('C'.$rowCount, $data['enroll']);
            $sheet->setCellValue('D'.$rowCount, $data['name_of_company']);
            $sheet->setCellValue('E'.$rowCount, $data['email']);
            $sheet->setCellValue('F'.$rowCount, $data['address']);
            $sheet->setCellValue('G'.$rowCount, $data['country']);
            $sheet->setCellValue('H'.$rowCount, $data['state']);
            $sheet->setCellValue('I'.$rowCount, $data['city']);
            $sheet->setCellValue('J'.$rowCount, $data['Type_of_Intenship']);
            $sheet->setCellValue('K'.$rowCount, $data['Date_of_Joining']);
            $sheet->setCellValue('L'.$rowCount, $data['Date_of_Ending']);
            $sheet->setCellValue('M'.$rowCount, $data['Sem']);
            $sheet->setCellValue('N'.$rowCount, $data['year']);
            $sheet->setCellValue('O'.$rowCount, $data['Duration']);
            $sheet->setCellValue('P'.$rowCount, $data['Skills_Involved']);
            $rowCount++;
        }

        if($file_ext_name == 'xlsx')
        {
            $writer = new Xlsx($spreadsheet);
            $final_filename = $fileName.'.xlsx';
        }
        elseif($file_ext_name == 'xls')
        {
            $writer = new Xls($spreadsheet);
            $final_filename = $fileName.'.xls';
        }
        elseif($file_ext_name == 'csv')
        {
            $writer = new Csv($spreadsheet);
            $final_filename = $fileName.'.csv';
        }

        // $writer->save($final_filename);
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attactment; filename="'.urlencode($final_filename).'"');
        $writer->save('php://output');

    }
    else
    {
        $_SESSION['message'] = "No Record Found";
        header('Location: index.php');
        exit(0);
    }
}

?>