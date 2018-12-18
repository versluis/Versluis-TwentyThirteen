<?php
// Versluis 2013 Theme
// functions.php

include 'includes/headers.php';
include 'includes/podcast-badge.php';


// enable .brush file uploads
// since @1.5
function allow_brush_file_uploads ( $existing_mimes=array() ) {
	$existing_mimes['brush'] = 'text/plain'; 
	return $existing_mimes;
}
add_filter('upload_mimes', 'allow_brush_file_uploads');

/* Word Count functions */
function guru_getWordCountFromPosts () {
	
	$count = 0;
	$posts = get_posts( array(
			'numberposts' => -1,
			'post_type' => 'any'
	));
	
	foreach( $posts as $post ) {
		$count += str_word_count( strip_tags( get_post_field( 'post_content', $post->ID )));
	}
	$num =  number_format_i18n( $count );
	
	return $count;
}

function guru_getWordCountCommentsCurrentUser() {
	
	$count = 0;
	$user_id = get_current_user_id();
	$comments = get_comments( array(
			'user_id' => $user_id
	));
	foreach( $comments as $comment ) {
		$count += str_word_count( $comment->comment_content );
	}
	return $count;
}

/* remove JetPack upsell messages */
/* https://mattreport.com/disable-jetpack-upsell-ads/ */
add_filter( 'jetpack_just_in_time_msgs', '__return_false' );

// add Amazon oneLink shenanigans
function guru_amazonOneLink() {
	$oneLink = '<div id="amzn-assoc-ad-5e4fb363-4081-411a-8049-667d48d2b006"></div><script async src="//z-na.amazon-adsystem.com/widgets/onejs?MarketPlace=US&adInstanceId=5e4fb363-4081-411a-8049-667d48d2b006"></script>';
	echo $oneLink;
}
add_action ('wp_footer', 'guru_amazonOneLink');