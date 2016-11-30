<?php

Class Template3 {

	public $img_x;
	public $img_y;
	public $header_offset;
	public $sub_header_align;
	public $font_header;
	public $font_text;
	public $font_style_header;
	public $font_style_text;
	public $sub_header_color;
	public $sub_header_font_color;
	public $border_color;
	public $text_font_color;
	public $header_font_color;
	public $leftMagin;

	public function __construct()
	{
		$this->img_x = 155;
		$this->img_y = 5;
		$this->header_offset = 0;
		$this->sub_header_align = 'L';
		$this->font_header = 'Arial';
		$this->font_text = 'Courier';
		$this->font_style_header = 'B';
		$this->font_style_text = '';
		$this->sub_header_color = [66,134,244];
		$this->sub_header_font_color = [255,255,255];
		$this->border_color = [66,134,244];
		$this->text_font_color = [0,0,0];
		$this->header_font_color = [0,0,0];
		$this->leftMagin = 10;
	}

}