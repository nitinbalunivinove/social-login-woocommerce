<?php 
if( !defined('ABSPATH') ) exit;
final class snLoginPlugin{
	public $version = '1.0.0';
	protected static $_instance = null;

	public static function instance(){
		if( is_null( self::$_instance ) ){
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	public function __construct(){
		$this->define_constants();
		$this->includes();
		$this->init_hooks();
	}

	private function define_constants(){
		$this->define( 'SNL_PLUGIN_ABSPATH', dirname( SNL_PLUGIN_FILE ) );
	}

	private function define( $name, $value ) {
		if( ! defined( $name ) ) {
			define( $name, $value );
		}
	}

	public function includes(){
		include_once SNL_PLUGIN_ABSPATH .'/includes/classes/class-plugin-options.php';
	}

	public function init_hooks(){		
		register_activation_hook( SNL_PLUGIN_FILE, array( $this, 'install' ) );
	}

	public function install(){
	    if( !in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ){
	        wp_die('Sorry, but this plugin requires the Woocommerce to be installed and active. <br>
	        <a href="' . admin_url( 'plugins.php' ) . '">&laquo; Return to Plugins</a>');
	    }
	}
}
?>