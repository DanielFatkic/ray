//<?php

/* To prevent PHP errors (extending class does not exist) revealing path */
if ( !\defined( '\IPS\SUITE_UNIQUE_KEY' ) )
{
	exit;
}

abstract class ray_hook_load_ray extends _HOOK_CLASS_
{


	
	public function init()
	{
		return parent::init();
	}
  
	protected function loadRay()
	{
		if( !function_exists( 'ray' ) )
		{
			require_once \IPS\Application::getRootPath('ray')  . '/applications/ray/sources/vendor/autoload.php';
		}
	}

}
