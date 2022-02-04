<?php

namespace Apiki\Theme;

use ReflectionClass;

abstract class Loader
{
	/**
	 * Get namespace this class.
	 *
	 * @return string
	 */
	public function get_namespace()
	{
		return ( new ReflectionClass( $this ) )->getNamespaceName();
	}

	/**
	 * Prepare the item for the REST response.
	 *
	 * @param array $controllers list of controllers.
	 */
	public function load_controllers( $controllers )
	{
		$namespace = $this->get_namespace();

		foreach ( $controllers as $name ) {
			$this->handle_instance( sprintf( "{$namespace}\Controller\%s", $name ) );
		}
	}

	/**
	 * Create instance of controllers.
	 *
	 * @param string $class class name.
	 */
	private function handle_instance( $class )
	{
		$instance = new $class();
	}
}
