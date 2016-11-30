<?php

/**
* 
*/
class Template2
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
	public $text_font_color;
	public $ribbon_img;
	public $kitty_bot_img;
	public $kitty_top_img;
	public $header_font_color;
	public $leftMagin;

	
	function __construct()
	{
		# code...
		$this->img_x = 10;
		$this->img_y = 5;
		$this->header_offset = 50;
		$this->sub_header_align = 'C';
		$this->font_header = 'Comic';
		$this->font_text = 'Comic';
		$this->background_img = '';
		$this->background_x = '';
		$this->background_y = '';
		$this->font_style_header = 'B';
		$this->font_style_text = '';
		$this->sub_header_color = [244, 66, 206];
		$this->sub_header_font_color = [255,255,255];
		$this->border_color = [244, 66, 206];
		$this->left_bar_img = 'img/side-bar-2.png';
		$this->text_font_color = [239, 134, 216];
		$this->kitty_top_img = 'img/hello-kitty2.png';
		$this->kitty_bot_img = 'img/footer-kitty.jpeg';
		$this->ribbon_img = 'img/ribbon.png';
		$this->header_font_color = [255, 186, 240];
		$this->leftMagin = 40;
	}
}