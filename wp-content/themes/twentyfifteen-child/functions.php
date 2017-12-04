<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
   wp_enqueue_style( 'child-style',
       get_stylesheet_directory_uri() . '/style.css',
       array('parent-style')
   );
}
// String with title & date of the latest updated post (e.g. for the footer)
function mostrecent_post_update($d = '') {
	$recent = new WP_Query("showposts=1&orderby=modified&post_status=publish");
	if ( $recent->have_posts() ) {
		while ( $recent->have_posts() ) {
			$recent->the_post();
			$mostrecent_title = get_the_title();
			$mostrecent_date = get_the_modified_date($d);
		}
		echo 'Recently updated: <em>' . $mostrecent_title . '</em>, ' . $mostrecent_date;
	}
	else
		echo ':-(';
}
