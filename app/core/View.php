<?php

namespace app\core;

class View {

	public $path;
	public $layout = 'default'; 
	public $route;

	public function __construct($route) {
		$this->route = $route;
		$this->path = $route['controller'].'/'.$route['action'];
	}

	public function render($title, $vars = []) {
		extract($vars);
		$path = 'app/views/'.$this->path.'.php';

		if(file_exists($path) ) {
			ob_start();
			require $path;
			$content = ob_get_clean();
			require $path;
		} else {
			echo 'Вид не найден: '.$this->path;
		}
	}

	public function redirect($url) {
		header('Location: '.$url);
		exit;
	}

	public static function errorCode($code) {
		http_response_code($code);
		$path = 'app/views/errors/'.$code.'.php';
		
		if(file_exists($path) ) {
			require $path;
		}
		exit;
	}	
}
