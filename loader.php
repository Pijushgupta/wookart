<?php
/**
 * loading composer auto-loader
 */
if(file_exists( get_template_directory() . '/vendor/autoload.php' )){
	require_once get_template_directory() . '/vendor/autoload.php';
}

/**
 * loading custom codes
 */
if(file_exists( get_template_directory() . '/inc/custom.php' )){
	require_once get_template_directory() . '/inc/custom.php';
}