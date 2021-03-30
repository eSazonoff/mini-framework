<?php

class Router {
		
	protected static $routes = [];
	protected static $route = [];

	public static function add($regexp, $route = []) {
		self::$routes[$regexp] = $route;
	}

	public static function getRoutes() {
		return self::$route;
	}

}

?>