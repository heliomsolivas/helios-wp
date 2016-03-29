<h1>Helios Theme Options</h1>
<h3>Manage Options</h3>
<p>Customize the default Wordpress Appearence Options</p>
<?php settings_errors(); ?>
<form method="post" action="options.php">
	<?php settings_fields('helios-settings-group') ;?>
	<?php do_settings_sections('helios_ms'); ?>
	<?php submit_button(); ?>
	</form>