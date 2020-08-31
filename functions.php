<?php

if(file_exists( get_template_directory() . '/loader.php')){
	require_once get_template_directory() . '/loader.php';
}

/* creating object of inc/custom.php */
$wookartcustom  = new custom();
