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
}