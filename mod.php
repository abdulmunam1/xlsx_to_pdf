<?php 
require_once __DIR__ . '/MPDF/vendor/autoload.php'; // Adjust the path as needed

use Mpdf\Mpdf;

function mod($htmlContent){
//$htmlContent = '<html><head></head><body><h1>Hello, world!</h1></body></html>';

// Create an mPDF object
$mpdf = new Mpdf();

// Add the HTML content to the mPDF object
$mpdf->WriteHTML($htmlContent);

// Specify the output PDF file path
$pdfFilePath = 'output.pdf';

// Output the PDF to a file
$mpdf->Output($pdfFilePath, 'F');

// Output the PDF file path
echo "PDF file saved at: $pdfFilePath";
}
