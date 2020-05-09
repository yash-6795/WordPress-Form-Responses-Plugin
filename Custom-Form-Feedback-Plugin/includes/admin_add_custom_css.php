<?php
function admin_add_custom_css()
{
	wp_register_style('admin_bootstrap',get_template_directory_uri().'/assets/css/bootstrap.min.css');
	wp_enqueue_style('admin_bootstrap');
}
?>