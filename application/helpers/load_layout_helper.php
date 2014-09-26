<?php
if (!function_exists('load_layout')) {

	function load_layout($view, $vars = array(), $return = FALSE, $layout = 'default') {
		$CI = get_instance();

		$layout = 'sys_layout/' . $layout;
		if (is_array($vars)) {
			$vars['sys_my_content_view'] = $view;
		} else {
			$vars = array('sys_my_content_view' => $view, $vars);
		}

		return $CI -> load -> view($layout, $vars, $return);
	}

}
