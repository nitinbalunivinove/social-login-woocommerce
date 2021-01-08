<?php 
$settings_page = add_query_arg( array( 'page' => 'sn-login-module'), admin_url( 'admin.php' ) );
$snl_selected_tab = "common";
$general_tab = $fb_tab = $fb_content = $tw_tab="";
if( isset($_POST['snl_selected_tab']) && !empty($_POST['snl_selected_tab']) ){
	$snl_selected_tab = $_POST['snl_selected_tab'];
}
switch( $snl_selected_tab ) {
	case 'facebook' : 
	$fb_tab 	= ' nav-tab-active';
	$fb_content = ' snl-active-content';
	break;

}							
?>
<div class="wrap">
	<h2 class="sn-settings-title"><?php esc_html_e( 'Settings', 'snlogin' ); ?></h2>
	<br />
	<form action="<?php echo $settings_page; ?>" method="post">
		<div class="snl-content-section">
			<div class="navigation-tab-wrap">
				<a id="general_tab" class="nav-tab<?php //echo $general_tab; ?>" href="#common-settings">Settings</a>
				<a id="fb_tab" class="nav-tab<?php echo $fb_tab; ?>" href="#facebook-settings">Facebook</a>
				<a id="tw_tab" class="nav-tab<?php echo $tw_tab; ?>" href="#twitter-settings">Twitter</a>
				<input type="hidden" id="snl_selected_tab" name="snl_selected_tab" value="<?=$snl_selected_tab;?>">
			</div>
			<div style="clear:both;"></div>
			<div class="snl-tab-content-wrap">
				<div class="snl-tab-content" id="common-settings">
					<?php //include_once( SNL_PLUGIN_ABSPATH . '/includes/admin-templates/general-settings.php' ); ?>
				</div>
				<div class="snl-tab-content <?= $fb_content; ?> " id="facebook-settings">
					<?php include_once( SNL_PLUGIN_ABSPATH . '/includes/admin-templates/facebook-settings.php' ); ?>				
				</div>
				<div class="snl-tab-content <?= $tw_content; ?> " id="twitter-settings">
					<?php include_once( SNL_PLUGIN_ABSPATH . '/includes/admin-templates/twitter-settings.php' ); ?>				
				</div>
			</div>	
		</div>
		</div>	
	</form>
</div>