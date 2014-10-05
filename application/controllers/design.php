<?php
class Design extends CI_Controller {
	private $theme;

	public function __construct() {
		parent::__construct();
		$this -> theme = 'design';
	}

	public function _remap($method, $params = array()) {
		$ctrl_method = 'ctrl_' . $method;

		if (method_exists($this, $ctrl_method)) {
			return call_user_func_array(array($this, $ctrl_method), $params);
		} else {
			load_layout($this -> theme . '/' . $method, NULL, NULL, $this -> theme);
		}
	}

	// 회원 등록폼
	private function ctrl_register() {
		$this -> load -> view($this -> theme . '/register');
	}

}
