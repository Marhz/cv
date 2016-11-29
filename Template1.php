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
	public $sub_header_color;
	public $sub_header_font_color;
	public $border_color;
	public $left_bar_img;

	
	function __construct()
	{
		# code...
		$this->img_x = 10;
		$this->img_y = 5;
		$this->header_offset = 50;
		$this->sub_header_align = 'C';
		$this->font_header = 'Arial';
		$this->font_text = 'Times';
		$this->background_img = '';
		$this->background_x = '';
		$this->background_y = '';
		$this->font_style_header = 'B';
		$this->font_style_text = '';
		$this->sub_header_color = [66,134,244];
		$this->sub_header_font_color = [255,255,255];
		$this->border_color = [66,134,244];
		$this->left_bar_img = 'img/left-bar1.png';
	}
}