<?php
class Hero_fluid extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}
	
	public function _remap($method)
	{
		$mode = $method != 'index' ? $method : 1;
		load_layout('hero_fluid/' . $mode, NULL, NULL, 'hero_fluid');
	}
}
