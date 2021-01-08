<?php 
if( !defined('ABSPATH') ) exit;
if( !class_exists('snPluginAdminOptions') ){
	class snPluginAdminOptions{
		public function __construct(){
			$this->init_hook();
		}

		private function init_hook(){
			add_action( 'admin_menu', array( $this, 'admin_menu' ), 9 );
			add_action('admin_init', array( $this, 'save_settings') );
		}

		public function dd( $array ){
			echo '<pre>';
			print_r($array);
			echo '</pre>';
		}

		public function admin_menu(){
			add_menu_page( __( 'SN Login', 'snlogin' ), __( 'SN Login', 'snlogin' ), 
			'manage_options', 'sn-login-module', array($this, 'settings_page'), 'dashicons-money-alt', '55.5' );
			
			$settings = add_submenu_page( 'sn-login-module', 'Settings', 'Settings', 'manage_options', 
			'sn-login-module', array( $this, 'settings_page' ) );

			$stats 	= add_submenu_page( 'sn-login-module', 'Login Stats', 'Login Stats', 'manage_options', 
			'sn-login-stats', array( $this, 'login_stats_page' ) );

			add_action( 'load-'.$settings, array($this, 'load_scripts') );
			add_action( 'load-'.$stats, array($this, 'load_scripts') );
		}

		public function load_scripts(){
			add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_admin_script' ) );
		}

		public function enqueue_admin_script(){
			wp_enqueue_style( 'snlogin_font_awesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
			wp_enqueue_style( 'snlogin_admin_style', plugins_url( 'assets/css/admin-style.css', SNL_PLUGIN_FILE ) );
			wp_enqueue_script( 'snlogin_admin_script', plugins_url( 'assets/js/admin-scripts.js', SNL_PLUGIN_FILE ), 
			array(), '1.0.0', true );
			wp_localize_script( 'snlogin_admin_script', 'snlObj',
			array(
				'ajax_url' 			=> admin_url( 'admin-ajax.php' ),
			)
			);
		}

		public function settings_page(){
			include_once( SNL_PLUGIN_ABSPATH . '/includes/admin-templates/settings.php' );
		}

		public function login_stats_page(){
		
		}

		public function save_settings(){
			if( isset($_POST['snl-save-settings']) && !empty($_POST['snl-save-settings']) ){
				
				extract($_POST);

				$snl_enable_facebook = ( isset($_POST['enable_facebook']) ) ? 'yes' : 'no';
	            $snl_enable_twitter = ( isset($_POST['enable_twitter']) ) ? 'yes' : 'no';

	            $options_array = [
	            	'snl_enable_facebook' 		=> $snl_enable_facebook,
	            	'snl_fb_app_id' 			=> $snl_fb_app_id,
	            	'snl_fb_app_secret' 		=> $snl_fb_app_secret,
	            	'snl_enable_twitter' 		=> $snl_enable_twitter,
	            	'snl_twitter_app_id' 		=> $snl_twitter_app_id,
	            	'snl_twitter_app_secret' 	=> $snl_twitter_app_secret

	            ];

	            foreach( $options_array as $options_key => $options_value ) {
                	update_option( $options_key, $options_value );
            	}
			}
		}

	}
	new snPluginAdminOptions;
}
?>