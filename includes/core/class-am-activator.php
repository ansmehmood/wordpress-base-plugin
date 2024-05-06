<?php

/**
 * Security check! Stop execution if user access this file directly outside of WordPress Admin Panel
 */
if( !defined( 'ABSPATH' ) ) {

    die( 'Stop, Kangaroo are not allowed to jump in!' );
}


class AMActivator {

    public function __construct() {
        
    }


    public static function am_activation_func() {

        // Code that needs to be executed on activation of plugin
    }
}