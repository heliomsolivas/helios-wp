<?php

/*

	====================
	Página do Admin
	====================

	*/

	function helios_add_admin_page(){
		//Generate Helios Admin Page
		add_menu_page('Helios', 'Helios', 'manage_options', 'helios_ms', 'helios_theme_create_page', 'dashicons-admin-customizer', 110);

		//Generate Helios Admin Sub Page
		add_submenu_page( 'helios_ms', 'Helios', 'Settings', 'manage_options', 'helios_ms' , 'helios_theme_create_page');
		add_submenu_page('helios_ms', 'Helios CSS Options', 'Custom CSS', 'manage_options', 'helios_ms_css', 'helios_theme_settings_page');

		//Activate Custom Settings
		add_action('admin_init', 'helios_custom_settings' );
	}

	add_action('admin_menu', 'helios_add_admin_page');

	function helios_custom_settings(){
		register_setting( 'helios-settings-group', 'first_name');
		register_setting( 'helios-settings-group', 'last_name');
		register_setting( 'helios-settings-group', 'twitter');

		add_settings_section('helios-general-options', 'General Options', 'helios_general_options', 'helios_ms' );

		add_settings_field( 'general-name', 'Full Name', 'helios_general_name', 'helios_ms', 'helios-general-options');
		add_settings_field( 'general-twitter', 'Twitter', 'twitter_general', 'helios_ms', 'helios-general-options', 'helios_sanitize_twitter');
	}

	function helios_general_options(){
		echo 'Customize your sidebar Info';
	}

	function helios_theme_create_page(){
		//generation of our admin page
		require_once(get_template_directory() . '/inc/templates/helios-admin.php');
	}

	function helios_theme_settings_page(){
		//generation of our settings page
		echo "<h1>Helios Custom CSS</h1>";
	}

	function helios_general_name(){
		$firstName = esc_attr(get_option('first_name'));
		$lastName = esc_attr(get_option('last_name'));
		echo '<input type="text" name="first_name" placeholder="First name" value="'.$firstName.'" />
		<input type="text" name="last_name" placeholder="Last Name" value="'.$lastName.'"/>';
	}

	function twitter_general(){
		$twitter = esc_attr(get_option('twitter'));
		echo '<input type="text" name="twitter" placeholder="Twitter" value="'.$twitter.'" /><p class="description">Input your Twitter username without the @ character.</p>';
	}

	//Sanitization Settings
	function helios_sanitize_twitter($input){
		$output = sanitize_text_field($input);
		$output = str_replace('@', '', $output);
		return $output;
	}