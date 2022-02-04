<?php

namespace Apiki\Theme\Model;

class FooModel {

    public function __construct() {
        /*
         * Hooks WordPress
         */
        add_filter( 'init', [ &$this, 'filter_example' ] );
        add_action( 'init', [ &$this, 'action_example' ] );
    }

    /**
     * Any comments on the method
     *
     * @return void
     */
    public function action_example() {
        //Some Code...
    }

    /**
     * Any comments on the method
     *
     * @param $param
     */
    public function filter_example( $param ) {
        //Some Code...
    }
}
