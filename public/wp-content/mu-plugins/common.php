<?php
/*
	Often used custom functions that need to always be on	
*/
	
// Make uploaded images SCALE responsive
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}

//add class to image
function add_image_class($class){
	$class .= ' scale-with-grid';
	return $class;
}
add_filter('get_image_tag_class','add_image_class');

?>