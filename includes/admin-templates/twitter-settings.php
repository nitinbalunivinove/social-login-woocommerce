<?php 
$tw_enable 					= get_option('snl_enable_twitter');
$snl_twitter_app_id 		= get_option('snl_twitter_app_id');
$snl_twitter_app_secret 	= get_option('snl_twitter_app_secret');
?>
<h3 class="">Twitter Settings</h3>
<div class="inside">
<table class="form-table">
<tbody>
	<tr valign="top">
		<th scope="row">
			<label>Twitter Application:</label>
		</th>
		<td>
		</td>
	</tr>
	<tr>
		<th scope="row">
			<label for="snl_enable_twitter">Enable Twitter:</label>
		</th>
		<td>
			<input type="checkbox" id="snl_enable_twitter" name="snl_enable_twitter" value="1"
			<?php echo ($tw_enable == "yes" ) ? 'checked="checked"' : ''; ?>>
			<label for=" ">Check this box, if you want to enable twitter social login registration.</label>
		</td>
	</tr>

	<tr valign="top">
		<th scope="row">
			<label for="snl_twitter_app_id">Twitter App ID/API Key:</label>
		</th>
		<td>
		<input id="snl_twitter_app_id" type="text" class="regular-text" name="snl_twitter_app_id" value="<?php echo $snl_twitter_app_id; ?>" placeholder="Enter twitter API Key.">
		</td>
	</tr>

	<tr valign="top">
		<th scope="row">
			<label for="snl_twitter_app_secret">Twitter App Secret:	</label>
		</th>
		<td>
		<input id="snl_twitter_app_secret" type="text" class="regular-text" name="snl_twitter_app_secret" 
		value="<?php echo $snl_twitter_app_secret; ?>" placeholder="Enter Twitter App Secret.">
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