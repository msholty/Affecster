<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
	/**
	 * Initializes the Autoloader
	 */
	protected function _initAutoload()
	{
		$autoloader = new Zend_Application_Module_Autoloader(
			array(
				'namespace' => 'Default',
				'basePath'  => dirname(__FILE__),
				'resourceTypes' => array(
					'module' => array(
						'namespace' => 'module_',
						'path' => 'modules/'
					),
				)
			)
		);
		return $autoloader;
	}

	protected function _initRouter()
	{
		// Get Front Controller Instance and then get Router
		$router = Zend_Controller_Front::getInstance()->getRouter();

		$route = new Zend_Controller_Router_Route(
			'register',
			array(
				'module'	 => 'authentication',
				'controller' => 'authentication',
				'action'     => 'register'
			)
		);

		$router->addRoute('authentication', $route);

		$route = new Zend_Controller_Router_Route(
			'login',
			array(
				'module'	 => 'authentication',
				'controller' => 'authentication',
				'action'     => 'login'
			)
		);

		$router->addRoute('login', $route);
	}
}