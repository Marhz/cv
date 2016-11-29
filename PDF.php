<?php
	
require 'vendor/autoload.php';

class PDF extends FPDF
{
	protected $post;
	protected $template;
	protected $photo;

	public function setPost($post)
	{
		$this->post = $post;
	}

	public function setTemplate($template,$photo)
	{
		$this->template = $template;
		$this->photo = $photo;
	}

	function Header()
	{	
		extract($this->post);
	    // Logo
	    if(isset($this->template->left_bar_img))
	    	$this->Image($this->template->left_bar_img,0,0,35,600);
	    $this->setLeftMargin(40);
	    if(isset($this->photo))
	    	$this->Image('img/'.$this->photo,$this->template->img_x+$this->lMargin-10,$this->template->img_y,45);
	    // Police Arial gras 15
	    $this->SetFont($this->template->font_header,$this->template->font_style_header,14);
	    // Décalage à droite
	    if(isset($this->photo) && $this->template->img_x == 10)
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
		$this->setFillColor($this->template->sub_header_color[0],$this->template->sub_header_color[1],$this->template->sub_header_color[2]);
		$this->setDrawColor($this->template->border_color[0],$this->template->border_color[1],$this->template->border_color[2]);
		$this->setTextColor($this->template->sub_header_font_color[0],$this->template->sub_header_font_color[1],$this->template->sub_header_font_color[2]);
		$this->setFont($this->template->font_header,'B',18);
		$this->Cell(0,10,'Formations',1,1,$this->template->sub_header_align,'#cecece');
		$this->ln(8);
		$i = 0;
		$this->setTextColor(0,0,0);
		foreach ($formations as $formation)
		{
			$this->SetFont($this->template->font_header,'B',14);
			$this->Cell(0,7,$debut_formation[$i].'-'.$fin_formation[$i],0,2);
			$this->setFont($this->template->font_text);
			$this->MultiCell(30,7,utf8_decode($formation),0,2);
			$i++;
		}
		$this->ln(10);
	}

	public function exp()
	{
		extract($this->post);
		$this->setFillColor($this->template->sub_header_color[0],$this->template->sub_header_color[1],$this->template->sub_header_color[2]);
		$this->setDrawColor($this->template->border_color[0],$this->template->border_color[1],$this->template->border_color[2]);
		$this->setTextColor($this->template->sub_header_font_color[0],$this->template->sub_header_font_color[1],$this->template->sub_header_font_color[2]);
		$this->setFont($this->template->font_header,'B',18);
		$this->Cell(0,10,utf8_decode('Expériences professionnelles'),1,1,$this->template->sub_header_align,'#cecece');
		$this->ln(8);
		$i = 0;
		$this->setTextColor(0,0,0);
		foreach ($exp_pro as $exp)
		{
			$this->SetFont($this->template->font_header,'B',14);
			$this->Cell(0,7,$debut_exp[$i].'-'.$fin_exp[$i],0,2);
			$this->setFont($this->template->font_text);
			$this->MultiCell(30,7,utf8_decode($exp),0,2);
			$i++;
		}
		$this->ln(10);
	}

	public function comp()
	{
		extract($this->post);
		$this->setFillColor($this->template->sub_header_color[0],$this->template->sub_header_color[1],$this->template->sub_header_color[2]);
		$this->setDrawColor($this->template->border_color[0],$this->template->border_color[1],$this->template->border_color[2]);
		$this->setTextColor($this->template->sub_header_font_color[0],$this->template->sub_header_font_color[1],$this->template->sub_header_font_color[2]);
		$this->setFont($this->template->font_header,'B',18);
		$this->Cell(0,10,utf8_decode('Langues et compétences'),1,1,$this->template->sub_header_align,'#cecece');
		$this->ln(8);
		$i = 0;
		$this->setTextColor(0,0,0);
		foreach ($competences as $competence)
		{
			$this->setFont($this->template->font_text,'',14);
			$this->MultiCell(30,7,utf8_decode($competence),0,2);
			$i++;
		}
	}

}