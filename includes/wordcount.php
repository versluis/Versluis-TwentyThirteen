<?php
/**************************** */
/* Versluis 2013 Theme
/* Word Count Functions 
/* *************************** */

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