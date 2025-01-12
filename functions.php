<?php 
add_action( 'wp_enqueue_scripts', 'adventureTheme_enqueue_styles' );

function adventureTheme_enqueue_styles() {
	wp_enqueue_style( 
		'adventureTheme-style', 
		get_stylesheet_uri()
	);
}
?>