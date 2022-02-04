<?php
namespace Apiki\Theme;

use Carbon_Fields\Carbon_Fields;

class Core extends Loader
{
	public function __construct()
	{
		add_action( 'after_setup_theme', [ &$this, 'foo' ] );

        /**
         * Array of Controller Class
         */
		$controllers = [
			'ThemeOptionsController'
		];

		$this->load_controllers( $controllers );
	}

    /**
     * Some comment about function
     */
	public function foo()
	{
		Carbon_Fields::boot();
	}

	public function init()
	{

	}
}
