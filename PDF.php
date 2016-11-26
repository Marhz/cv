<?php
	
require 'vendor/autoload.php';

class PDF extends FPDF
{
	protected $post;
	protected $template;

	public function setPost($post)
	{
		$this->post = $post;
	}

	public function setTemplate($template)
	{
		$this->template = $template;
	}

	function Header()
	{	
		extract($this->post);
	    // Logo
	    $this->Image('img/default-user-avatar.png',$this->template->img_x,$this->template->img_y,45);
	    // Police Arial gras 15
	    $this->SetFont($this->template->font_header,$this->template->font_style_header,12);
	    // Décalage à droite
	    $this->Cell($this->template->header_offset);
	    // Titre
	    $this->Cell(0,7,'Nom: '.utf8_decode($nom),0,2,'G');
	    $this->Cell(0,7,'Prenom: '.utf8_decode($prenom),0,2,'G');
	    $this->Cell(0,7,'Mail: '.utf8_decode($mail),0,2,'G');
	    $this->Cell(0,7,'Tel: '.utf8_decode($tel),0,2,'G');
	    $this->Cell(0,7,'Date de naissance: '.utf8_decode($date),0,2,'G');
	    // Saut de ligne
	    $this->Ln(12);
	}

	public function formations()
	{
		extract($this->post);
		$this->Cell(0,10,'Formations',1,1,$this->template->sub_header_align);
		$this->ln(8);
		$i = 0;
		foreach ($formations as $formation)
		{
			$this->SetFont('Arial','B',12);
			$this->Cell(0,7,$debut_formation[$i].'-'.$fin_formation[$i],0,2);
			$this->setFont('Times');
			$this->MultiCell(30,7,utf8_decode($formation),0,2);
			$i++;
		}
		$this->ln(15);
	}

	public function exp()
	{
		extract($this->post);
		$this->Cell(0,10,utf8_decode('Expériences professionnelles'),1,1,$this->template->sub_header_align);
		$this->ln(8);
		$i = 0;
		foreach ($exp_pro as $exp)
		{
			$this->SetFont('Arial','B',12);
			$this->Cell(0,7,$debut_exp[$i].'-'.$fin_exp[$i],0,2);
			$this->setFont('Times');
			$this->MultiCell(30,7,utf8_decode($exp),0,2);
			$i++;
		}
	}

}