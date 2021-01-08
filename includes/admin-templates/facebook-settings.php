<?php 
$fb_enable 			= get_option('snl_enable_facebook');
$snl_fb_app_id 		= get_option('snl_fb_app_id');
$snl_fb_app_secret 	= get_option('snl_fb_app_secret');
?>
<h3 class="">Facebook Settings</h3>
<div class="inside">
<table class="form-table">
<tbody>
	<tr valign="top">
		<th scope="row">
			<label>Facebook Application:</label>
		</th>
		<td></td>
	</tr>
	<tr>
		<th scope="row">
			<label for="snl_enable_facebook">Enable Facebook:</label>
		</th>
		<td>
			<input type="checkbox" id="snl_enable_facebook" name="enable_facebook" value="1" 
			<?php echo ($fb_enable == "yes" ) ? 'checked="checked"' : ''; ?>>
			<label for="snl_enable_facebook">Check this box, if you want to enable facebook social login registration.</label>
		</td>
	</tr>

	<tr valign="top">
		<th scope="row">
			<label for="snl_fb_app_id">Facebook App ID/API Key:</label>
		</th>
		<td>
		<input id="snl_fb_app_id" type="text" class="regular-text" name="snl_fb_app_id" value="<?php echo $snl_fb_app_id; ?>" placeholder="Enter Facebook API Key.">
		</td>
	</tr>

	<tr valign="top">
		<th scope="row">
			<label for="snl_fb_app_secret">Facebook App Secret:	</label>
		</th>
		<td>
		<input id="snl_fb_app_secret" type="text" class="regular-text" name="snl_fb_app_secret" value="<?php echo $snl_fb_app_secret; ?>" 
		placeholder="Enter Facebook App Secret.">
		</td>
	</tr>
	<tr valign="top">
		<td colspan="2">
			<input class="button-primary snl-save-btn" type="submit" name="snl-save-settings" value="Save Changes">
		</td>	
	</tr>
</tbody>
</table>
</div>