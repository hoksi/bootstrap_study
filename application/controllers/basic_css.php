<?php
class Basic_css extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}
	
	public function _remap($method)
	{
		$mode = $method != 'index' ? $method : 1;
		load_layout('basic_css/' . $mode, NULL, NULL, 'basic_css');
	}
}
