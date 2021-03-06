<?php

require 'PDF.php';
require 'Template1.php';
require 'Template2.php';
require 'Template3.php';

$photo = null;
if($_FILES['photo']['size'] > 0){
	$extension = pathinfo($_FILES['photo']['name'],PATHINFO_EXTENSION);
	$photo = str_rand("azertyuiop123456789",8).'.'.$extension;
	move_uploaded_file($_FILES['photo']['tmp_name'],'img/'.$photo);
}

$templateName = 'Template'.$_POST['theme'];
$template = new $templateName;

$pdf = new PDF();
$pdf->setTemplate($template,$photo);
$pdf->setPost($_POST);
$pdf->AddFont('Comic');
$pdf->AddFont('Comic','B','comicbd.php');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->formations();
$pdf->exp();
$pdf->comp();
$pdf->Output();

function str_rand($str, $size){
	$result = '';
	for ($i = 0; $i < $size; $i++)
		$result .= $str[rand(0,strlen($str)-1)];
	return $result;
}

?>