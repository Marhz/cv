<?php
require 'vendor/autoload.php';

class PDF extends FPDF
{
// En-tête
function Header()
{
    // Logo
    $this->Image('img/default-user-avatar.png',10,1,40);
    // Police Arial gras 15
    $this->SetFont('Arial','B',12);
    // Décalage à droite
    $this->Cell(45);
    // Titre
    $this->Cell(30,7,'Nom: ',0,2,'G');
    $this->Cell(30,7,'Prenom: ',0,2,'G');
    $this->Cell(30,7,'Mail: ',0,2,'G');
    $this->Cell(30,7,'Tel: ',0,2,'G');
    $this->Cell(30,7,'Date de naissance: ',0,2,'G');
    // Saut de ligne
    $this->Ln(40);
}

// Pied de page
function Footer()
{
    // Positionnement à 1,5 cm du bas
    $this->SetY(-15);
    // Police Arial italique 8
    $this->SetFont('Arial','I',8);
    // Numéro de page
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Instanciation de la classe dérivée
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
for($i=1;$i<=40;$i++)
    $pdf->Cell(0,10,utf8_decode('Impression de la ligne numéro '.$i),0,1);
$pdf->Output();
?>