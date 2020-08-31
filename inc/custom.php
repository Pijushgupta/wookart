<?php 

class custom{

		
	/**
	 * __construct
	 * simple constructor
	 * add any code to the constructor to get executed during object creation time
	 *
	 * @return void
	 */
	function __construct(){

		/* adding add_css_and_js methode to wp_enqueue_scripts hook  */
		add_action('wp_enqueue_scripts',array($this,'add_css_and_js'));

	}
	
	/**
	 * add_css_and_js
	 *adding css/js 
	 * @return void
	 */
	public function add_css_and_js(){
		wp_enqueue_style( 'tailwind-css', get_template_directory_uri().'/assets/css/dist.css', array(), '1', 'all' );
	}

	
}


