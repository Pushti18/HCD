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
    $fileName = "Mooc_Records";

    $student = "SELECT * FROM mooc";
    $query_run = mysqli_query($con, $student);

    if(mysqli_num_rows($query_run) > 0)
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue('A1', 'ID');
        $sheet->setCellValue('B1', 'Student Name');
        $sheet->setCellValue('C1', 'Enrollment No');
        $sheet->setCellValue('D1', 'Semester');
        $sheet->setCellValue('E1', 'Date');
        $sheet->setCellValue('F1', 'Credit');
        $sheet->setCellValue('G1', 'Platform');

        $rowCount = 2;
        foreach($query_run as $data)
        {
            $sheet->setCellValue('A'.$rowCount, $data['id']);
            $sheet->setCellValue('B'.$rowCount, $data['studentName']);
            $sheet->setCellValue('C'.$rowCount, $data['enroll']);
            $sheet->setCellValue('D'.$rowCount, $data['Sem']);
            $sheet->setCellValue('E'.$rowCount, $data['Date']);
            $sheet->setCellValue('F'.$rowCount, $data['Credit']);
            $sheet->setCellValue('G'.$rowCount, $data['platform']);
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