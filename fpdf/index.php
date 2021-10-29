<?php
require('../fpdf/fpdf.php');

class PDF extends FPDF
{

function Header()
{
    
    $this->SetFont('Arial','',12);
    
    $this->Cell(80);
    $this->Image("../image/Sena.png", 10, 10, 16);
    $this->Cell(40,10,'Reporte de Documentos',0,0,'C');
    $this->Cell(100, 10, "Fecha: ". date("d/m/Y"), 0, 1, "C");
    $this->Ln(20);
    $this->Cell(100, 10, utf8_decode('Asunto'), 1, 0, 'C', 0);
    $this->Cell(30, 10, 'Fecha', 1, 0, 'C', 0);
    $this->Cell(20, 10, 'Tipo', 1, 0, 'C', 0);
    $this->Cell(40, 10, utf8_decode('Persona'), 1, 1, 'C', 0);
}


function Footer()
{
    
    $this->SetY(-15);
    
    $this->SetFont('Arial','I',8);
    
    $this->Cell(0,10,utf8_decode('Pagina ').$this->PageNo().'/{nb}',0,0,'C');
}
}

require '../connection.php';
$consulta = "SELECT asunto,fecha,tipod,nombrep from documento,persona WHERE documento.id_persona=persona.id_persona and tipod='Entrada'";
$resultado = $con->query($consulta);

$pdf = new PDF();
$pdf-> AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',7);

while($row = $resultado->fetch_assoc()){
    $pdf->Cell(100, 10, $row['asunto'], 1, 0, '', 0);
    $pdf->Cell(30, 10, $row['fecha'], 1, 0, '', 0);
    $pdf->Cell(20, 10, $row['tipod'], 1, 0, '', 0);
    $pdf->Cell(40, 10, $row['nombrep'], 1, 1, '', 0);
}
$pdf->Output();
?>