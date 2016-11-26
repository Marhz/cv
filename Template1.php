<?php

/**
* 
*/
class Template1
{
	public $img_x;
	public $img_y;
	public $header_offset;
	public $sub_header_align;
	public $font_header;
	public $font_text;
	public $background_img;
	public $background_x;
	public $background_y;
	public $font_style_header;
	public $font_style_text;

	
	function __construct()
	{
		# code...
		$this->img_x = 10;
		$this->img_y = 1;
		$this->header_offset = 50;
		$this->sub_header_align = 'C';
		$this->font_header = 'Arial';
		$this->font_text = 'Times';
		$this->background_img = '';
		$this->background_x = '';
		$this->background_y = '';
		$this->font_style_header = 'B';
		$this->font_style_text = '';
	}
}