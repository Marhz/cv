<?php

require 'PDF.php';
require 'Template1.php';

//$post = decode_post(array_values($_POST));


$template = new Template1;
$pdf = new PDF();
$pdf->setTemplate($template);
$pdf->setPost($_POST);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$pdf->formations();
$pdf->exp();
$pdf->Output();

/*function decode_post($post)
{	
	for($i = 0; $i < sizeof($post);$i++)
	{
		if(is_array($post[$i]))
		{
			$post[$i] = decode_post($post[$i]);
		}
		else
			$_POST[$i] = utf8_decode($post[$i]);
	}
	return $post;
}
*/

?>