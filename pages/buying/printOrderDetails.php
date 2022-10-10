<?php

require('../../assets/fpdf184/fpdf.php');

class PDF extends FPDF {

	// Page header
	function Header() {
		
		// Add logo to page
		// $this->Image('gfg1.png',10,8,33);
		
		// Set font family to Arial bold
		$this->SetFont('Arial','B',20);
		
		// Move to the right
		$this->Cell(5);
		
		// Header
		$this->Cell(85,10,'Kieni Purchase Report',1,0,'C');
		
		// Line break
		$this->Ln(20);
	}

	// Page footer
	function Footer() {
		
		// Position at 1.5 cm from bottom
		$this->SetY(-15);
		
		// Arial italic 8
		$this->SetFont('Arial','I',8);
		
		// Page number
		$this->Cell(0,10,'Page ' .
			$this->PageNo() . '/{nb}',0,0,'C');
	}
}

// Instantiation of FPDF class
$pdf = new PDF();

// Define alias for number of pages
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',14);

// for($i = 1; $i <= 30; $i++)
// 	$pdf->Cell(0, 10, 'line number '
// 			. $i, 0, 1);
// Prints a cell with given text 
$pdf->Cell(60,20,'Thank you for shopping with us:', 0,  1);
$pdf->Cell(0,10,'Customer Name: Kelvin Nyoike', 0,  1);
$pdf->Cell(0,10,'Mpesa Transaction Code: QBF12345678Q', 0,  1);
$pdf->Cell(0,10,'Milk Quantity: 30 Litres', 0,  1);
$pdf->Cell(0,10,'Paid Amount: Kes 3000', 0,  1);
$pdf->Cell(0,10,'Milk Pick Up Location: Nyeri', 0,  1);

$pdf->Output();

?>
