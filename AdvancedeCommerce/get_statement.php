<?php
$pdd = date("M Y");
# Include FPDF class:
define('FPDF_FONTPATH','font/');
require('fpdf/html_table.php');

# Define invoice_id

# Generate invoice:
include_once("generate_statement.php");

# Send generated invoice to browser:
$pdf->Output('puechase_invoice.pdf', 'D')

?>