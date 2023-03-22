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
    $fileName = "Sports_Records";

    $student = "SELECT * FROM sports";
    $query_run = mysqli_query($con, $student);

    if(mysqli_num_rows($query_run) > 0)
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue('A1', 'ID');
        $sheet->setCellValue('B1', 'Student Name');
        $sheet->setCellValue('C1', 'Enrollment No');
        $sheet->setCellValue('D1', 'Name_of_award');
        $sheet->setCellValue('E1', 'Date');
        $sheet->setCellValue('F1', 'Year');
        $sheet->setCellValue('G1', 'Team');
        $sheet->setCellValue('H1', 'Level');
        $sheet->setCellValue('I1', 'Name_of_Agency');
        $sheet->setCellValue('J1', 'Contact Details of Agency');

        $rowCount = 2;
        foreach($query_run as $data)
        {
            $sheet->setCellValue('A'.$rowCount, $data['id']);
            $sheet->setCellValue('B'.$rowCount, $data['studentName']);
            $sheet->setCellValue('C'.$rowCount, $data['enroll']);
            $sheet->setCellValue('D'.$rowCount, $data['name_of_award']);
            $sheet->setCellValue('E'.$rowCount, $data['date']);
            $sheet->setCellValue('F'.$rowCount, $data['year']);
            $sheet->setCellValue('G'.$rowCount, $data['team']);
            $sheet->setCellValue('H'.$rowCount, $data['level']);
            $sheet->setCellValue('I'.$rowCount, $data['name_of_agency']);
            $sheet->setCellValue('J'.$rowCount, $data['contact_details']);

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