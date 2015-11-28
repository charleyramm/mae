<?php
if ( function_exists('register_sidebar') )
    register_sidebar();
    
function gallery_columns($content){
	$columns = 5;
	$pattern = array(
		'/(\[gallery(.*?)columns="([0-9])"(.*?)\])/ie',
		'/(\[gallery\])/ie',
		'/(\[gallery(.*?)\])/ie'
	);
	$replace = 'stripslashes(strstr("\1", "columns=\"$columns\"") ? "\1" : "[gallery \2 \4 columns=\"$columns\"]")';

	return preg_replace($pattern, $replace, $content);
}

add_filter('the_content', 'gallery_columns');

?>
