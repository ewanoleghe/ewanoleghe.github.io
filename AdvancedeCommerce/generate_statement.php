<?php
error_reporting(0);

include("conn/config.php");

# Define page access level:
srand ((double) microtime( )*1000000);
$random_number = rand( );
// Start recording data:
ob_start();

// Get the template:
include_once("invoice.php");

// Define invoice data:
$invoice_data = ob_get_contents();

// Stop getting data: 
ob_end_clean();

$pdf = new PDF('P', 'mm', 'Letter');
$pdf->SetAuthor($sitename);
$pdf->AddPage();
$pdf->SetFont('Arial','',10);

# Display the company logo:
$pdf->WriteHTML("$invoice_data");

?>