<?php
/*
Plugin Name:form
Plugin URI:kere-soft.cf
Description:this plugin is for online registration
Version:1.0
Text Domain:form
*/
include('includes/custom_menu.php');
include('includes/form_response_callback_function.php');
include('includes/admin_add_custom_css.php');
register_activation_hook(__FILE__,'after_install');
add_action('admin_enqueue_scripts','admin_add_custom_css');
add_action('admin_menu','form_custom_menu');

?>
