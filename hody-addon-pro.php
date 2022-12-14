<?php 
/*
Plugin Name: Hody Addon Pro
Plugin URI: https://hodessy.com/addon-pro
Description: Plugin adds custom blocks and advanced features to Hody Themes
Version: 0.0.1
Author: Hodessy
Author URI: https://hodessy.com
Text Domain: hodyaddon
*/

// If this file is called directly, abort. //
if ( ! defined( 'WPINC' ) ) {die;} // end if



if ( ! class_exists( 'HodyAddon' ) ) :

    
    class HodyAddon {

        private static $instance;

		/**
		 * Initiator
		 */
		public static function get_instance() {
			if ( ! isset( self::$instance ) ) {
				self::$instance = new self();
			}
			return self::$instance;
		}

		/**
		 * Constructor
		 */
		public function __construct() {

		// Let's Initialize Everything
            if ( file_exists( plugin_dir_path( __FILE__ ) . 'core-init.php' ) ) {
            require_once( plugin_dir_path( __FILE__ ) . 'core-init.php' );
    };
        }


    }


/**
	 * Kicking this off by calling 'get_instance()' method
	 */
	HodyAddon::get_instance();

endif;

//$hodyaddon = new HodyAddon;

