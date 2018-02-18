<?php
// Versluis 2013 functions.php

// let's remove the default header images
function versluis2013_remove_default_headers () {
	// remove_theme_support ('custom-header');
	unregister_default_headers (array('circle', 'diamond', 'star'));
}
add_action ('after_setup_theme', 'versluis2013_remove_default_headers', 12);

// now we'll add our own headers to the theme
function versluis2013_add_headers () {
	
	// this array contains my own header images
	// %s is a placeholder for the parent theme's directory
	// %2$s is the same for the child theme's directory
	register_default_headers( array(
		'header1' => array(
			'url' => '%2$s/headers/header_1.jpg',
			'thumbnail_url' => '%2$s/headers/header_1.jpg',
			/* translators: header image description */
			'description' => __( 'Header 1', 'twentythirteen' )
		),
		'header2' => array(
			'url' => '%2$s/headers/header_2.jpg',
			'thumbnail_url' => '%2$s/headers/header_2.jpg',
			/* translators: header image description */
			'description' => __( 'Header 2', 'twentythirteen' )
		),
		'header3' => array(
			'url' => '%2$s/headers/header_3.jpg',
			'thumbnail_url' => '%2$s/headers/header_3.jpg',
			/* translators: header image description */
			'description' => __( 'Header 3', 'twentythirteen' )
		),
		'header4' => array(
			'url' => '%2$s/headers/header_4.jpg',
			'thumbnail_url' => '%2$s/headers/header_4.jpg',
			/* translators: header image description */
			'description' => __( 'Header 4', 'twentythirteen' )
		),
		'header5' => array(
			'url' => '%2$s/headers/header_5.jpg',
			'thumbnail_url' => '%2$s/headers/header_5.jpg',
			/* translators: header image description */
			'description' => __( 'Header 5', 'twentythirteen' )
		),
		'header6' => array(
			'url' => '%2$s/headers/header_6.jpg',
			'thumbnail_url' => '%2$s/headers/header_6.jpg',
			/* translators: header image description */
			'description' => __( 'Header 6', 'twentythirteen' )
		),
		'header7' => array(
			'url' => '%2$s/headers/header_7.jpg',
			'thumbnail_url' => '%2$s/headers/header_7.jpg',
			/* translators: header image description */
			'description' => __( 'Header 7', 'twentythirteen' )
		),
		'header8' => array(
			'url' => '%2$s/headers/header_8.jpg',
			'thumbnail_url' => '%2$s/headers/header_8.jpg',
			/* translators: header image description */
			'description' => __( 'Header 8', 'twentythirteen' )
		),
		'header9' => array(
			'url' => '%2$s/headers/header_9.jpg',
			'thumbnail_url' => '%2$s/headers/header_9.jpg',
			/* translators: header image description */
			'description' => __( 'Header 9', 'twentythirteen' )
		),
		'header10' => array(
			'url' => '%2$s/headers/header_10.jpg',
			'thumbnail_url' => '%2$s/headers/header_10.jpg',
			/* translators: header image description */
			'description' => __( 'Header 10', 'twentythirteen' )
		),
		'header11' => array(
			'url' => '%2$s/headers/header_11.jpg',
			'thumbnail_url' => '%2$s/headers/header_11.jpg',
			/* translators: header image description */
			'description' => __( 'Header 11', 'twentythirteen' )
		),
		'header12' => array(
			'url' => '%2$s/headers/header_12.jpg',
			'thumbnail_url' => '%2$s/headers/header_12.jpg',
			/* translators: header image description */
			'description' => __( 'Header 12', 'twentythirteen' )
		),
		'header13' => array(
			'url' => '%2$s/headers/header_13.jpg',
			'thumbnail_url' => '%2$s/headers/header_13.jpg',
			/* translators: header image description */
			'description' => __( 'Header 13', 'twentythirteen' )
		),
		'header14' => array(
			'url' => '%2$s/headers/header_14.jpg',
			'thumbnail_url' => '%2$s/headers/header_14.jpg',
			/* translators: header image description */
			'description' => __( 'Header 14', 'twentythirteen' )
		),
		'header15' => array(
			'url' => '%2$s/headers/header_15.jpg',
			'thumbnail_url' => '%2$s/headers/header_15.jpg',
			/* translators: header image description */
			'description' => __( 'Header 15', 'twentythirteen' )
		),
		'header16' => array(
			'url' => '%2$s/headers/header_16.jpg',
			'thumbnail_url' => '%2$s/headers/header_16.jpg',
			/* translators: header image description */
			'description' => __( 'Header 16', 'twentythirteen' )
		),
		'header17' => array(
			'url' => '%2$s/headers/header_17.jpg',
			'thumbnail_url' => '%2$s/headers/header_17.jpg',
			/* translators: header image description */
			'description' => __( 'Header 17', 'twentythirteen' )
		),
		'header18' => array(
			'url' => '%2$s/headers/header_18.jpg',
			'thumbnail_url' => '%2$s/headers/header_18.jpg',
			/* translators: header image description */
			'description' => __( 'Header 18', 'twentythirteen' )
		),
		'header19' => array(
			'url' => '%2$s/headers/header_19.jpg',
			'thumbnail_url' => '%2$s/headers/header_19.jpg',
			/* translators: header image description */
			'description' => __( 'Header 19', 'twentythirteen' )
		),
		'header20' => array(
			'url' => '%2$s/headers/header_20.jpg',
			'thumbnail_url' => '%2$s/headers/header_20.jpg',
			/* translators: header image description */
			'description' => __( 'Header 20', 'twentythirteen' )
		),
		'header21' => array(
			'url' => '%2$s/headers/header_21.jpg',
			'thumbnail_url' => '%2$s/headers/header_21.jpg',
			/* translators: header image description */
			'description' => __( 'Header 21', 'twentythirteen' )
		)
		)); // end of array
} // end of main function
add_action ('after_setup_theme', 'versluis2013_add_headers');

// enable .brush file uploads
// since @1.5
function allow_brush_file_uploads ( $existing_mimes=array() ) {
$existing_mimes['brush'] = 'text/plain'; 
return $existing_mimes;
}
add_filter('upload_mimes', 'allow_brush_file_uploads');