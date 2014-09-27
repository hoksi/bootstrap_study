<?php
class Components extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}
	
	public function _remap($method)
	{
		$mode = $method != 'index' ? $method : 1;
		load_layout('components/' . $mode, NULL, NULL, 'components');
	}
}
