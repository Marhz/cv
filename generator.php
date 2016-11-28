<?php

require 'PDF.php';
require 'Template1.php';

if(isset($_FILES['photo'])){
	$extension = pathinfo($_FILES['photo']['tmp_name'],PATHINFO_EXTENSION);
	$name = str_rand("azertyuiop123456789",8).'.'.$extension;
	$r = move_uploaded_file($_FILES['photo']['tmp_name'],'img/'.$name);
	var_dump($r);
}

/*$template = new Template1;
$pdf = new PDF();
$pdf->setTemplate($template);
$pdf->setPost($_POST);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$pdf->formations();
$pdf->exp();
$pdf->Output();
*/

function str_rand($str, $size){
	$result = '';
	for ($i = 0; $i < $size; $i++)
		$result .= $str[rand(0,strlen($str)-1)];
	return $result;
}

?>