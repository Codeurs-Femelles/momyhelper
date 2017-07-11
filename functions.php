<?php
 error_reporting(0);
define('THEME_VERSION', '1.0.0');

//SET FOLDER CONSTANTS
define('ASSETS_URI', get_template_directory_uri(). '/assets/');
 add_theme_support( 'post-thumbnails' );
 
 //excerpt
 
function moh_excerpt($charlength=350 ,$excerpt=0 , $echo=true) { 
	if(!$excerpt) $excerpt = get_the_excerpt();
	$org_length = strlen($excerpt);
	if(strlen($excerpt)> $charlength){
	 $excerpt = substr($excerpt, 0, $charlength);
	 $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
	 $excerpt.='...';
	 }
	 //echo 'length:'.$org_length;
	if($echo){  echo $excerpt; }else{ return $excerpt; }
		
}

	/// حتى يصير داخل ال page -> excerpt

add_action('init', 'my_custom_init');
function my_custom_init() {
	add_post_type_support( 'page', 'excerpt' );
}

