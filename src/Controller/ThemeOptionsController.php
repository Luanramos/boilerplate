<?php

namespace Apiki\Theme\Controller;

class ThemeOptionsController
{
	public function __construct() {
                add_action( 'wp_enqueue_scripts', [ $this, 'sumicity_enqueue_theme_assets' ] );
	}

        /**
         * Any comments on the method
         *
         * @return void
         */
	public function sumicity_enqueue_theme_assets() {

                wp_enqueue_style(
                        'sumicity-theme-styles',
                        get_stylesheet_directory_uri() . '/dist/theme.css',
                        [],
                        filemtime( get_stylesheet_directory() . '/dist/theme.css' )
                );

                wp_enqueue_script(
                        'sumicity-theme-scripts',
                        get_stylesheet_directory_uri() . '/dist/theme.js',
                        [],
                        filemtime( get_stylesheet_directory() . '/dist/theme.js' ),
                        TRUE
                );

	}


}
