<?php
$theme = wp_get_theme(); // gets the current theme
	
if( 'Storely' == $theme->name){
	require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/storely/storely.php';
}

if( 'Shoply' == $theme->name){
	require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/shoply/shoply.php';
}

if( 'Storess' == $theme->name){
	require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/storess/storess.php';
}

