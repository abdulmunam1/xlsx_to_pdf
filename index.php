<?php 
require_once dirname(__FILE__) . '/PHPExcel-1.8/Classes/PHPExcel.php';
include('mod.php');

$excelFile = 'output.xlsx';

// Load the Excel file
$objPHPExcel = PHPExcel_IOFactory::load($excelFile);

// Select the first worksheet
$worksheet = $objPHPExcel->getActiveSheet();

// Get the highest row and column
$highestRow = $worksheet->getHighestRow();
$highestColumn = $worksheet->getHighestColumn();

// Create HTML table
$htmlTable = '<table border="1">';

// Loop through each row
for ($row = 1; $row <= $highestRow; ++$row) {
    $htmlTable .= '<tr>';

    // Loop through each column
    for ($col = 'A'; $col <= $highestColumn; ++$col) {
        $cellValue = $worksheet->getCell($col . $row)->getValue();
        $htmlTable .= '<td>' . $cellValue . '</td>';
    }

    $htmlTable .= '</tr>';
}

$htmlTable .= '</table>';

// Output the HTML table
//echo $htmlTable;


mod($htmlTable);



?>
