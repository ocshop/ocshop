<?php
// *	@copyright	OPENCART.PRO 2011 - 2015.
// *	@forum	http://forum.opencart.pro
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

final class Loader {
	protected $registry;

	public function __construct($registry) {
		$this->registry = $registry;
	}
	
	public function controller($route) {
		// Get args by reference
		$trace = debug_backtrace();

		$args = $trace[0]['args'];
		
		// Sanitize the call
		$route = str_replace('../', '', (string)$route);
		
		// Trigger the pre events
		$result = $this->registry->get('event')->trigger('controller/' . $route . '/before', $args);
		
		if (!is_null($result)) {
			return $result;
		}
		
		array_shift($args);
		
		$action = new Action($route);
		$output = $action->execute($this->registry, $args);
			
		// Trigger the post events
		$result = $this->registry->get('event')->trigger('controller/' . $route . '/after', array(&$output));
		
		if (!is_null($result)) {
			return $result;
		}
		
		return $output;		
	}
	
	public function model($route) {
		// Sanitize the call
		$route = str_replace('../', '', (string)$route);
		
		$file = DIR_APPLICATION . 'model/' . $route . '.php';

		if (is_file($file)) {
			include_once($file);
			
			$this->registry->set('model_' . str_replace('/', '_', (string)$route), new DIContainer($this->registry, $route));
		} else {
			trigger_error('Error: Could not load model ' . $route . '!');
			exit();
		}
	}

	public function view($route, $data) {
		// Get args by reference
		$trace = debug_backtrace();

		$args = $trace[0]['args'];			
		
		// Sanitize the call
		$route = str_replace('../', '', (string)$route);
		
		// Trigger the pre events
		$result = $this->registry->get('event')->trigger('view/' . $args[0] . '/before', $args);
		
		if (!is_null($result)) {
			return $result;
		}
		
		$template = new Template('basic');
		
		foreach ($data as $key => $value) {
			$template->set($key, $value);
		}
		
		$output = $template->render($args[0] . '.tpl');
		
		// Trigger the post events
		$result = $this->registry->get('event')->trigger('view/' . $args[0] . '/after', array(&$output));
		
		if (!is_null($result)) {
			return $result;
		}
		
		return $output;
	}

	public function helper($route) {
		$file = DIR_SYSTEM . 'helper/' . str_replace('../', '', (string)$route) . '.php';

		if (is_file($file)) {
			include_once($file);
		} else {
			trigger_error('Error: Could not load helper ' . $route . '!');
			exit();
		}
	}

	public function config($route) {
		$this->registry->get('event')->trigger('config/' . $route . '/before', $route);
		
		$this->registry->get('config')->load($route);
		
		$this->registry->get('event')->trigger('config/' . $route . '/after', $route);
	}

	public function language($route) {
		$this->registry->get('event')->trigger('language/' . $route . '/before', $route);
		
		$this->registry->get('language')->load($route);
		
		$this->registry->get('event')->trigger('language/' . $route . '/after', $route);
	}
	
	public function call($route) {
		$file  = DIR_APPLICATION . $route . '.php';
		$class = preg_replace('/[^a-zA-Z0-9]/', '', $route);

		if (file_exists($file)) {
			include_once($file);
		
			return new $class($this->registry);
		} else {
			return false;
		}		
	}
}
