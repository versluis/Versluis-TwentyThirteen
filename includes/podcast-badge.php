<?php
// versluis.com 2013
// Apple Podcast Badge functions
// since @1.8

function versluis2013_add_content ($content){
	
	if (in_category ('Podcast')) {
		$after = "It's a Podcast";
	} else {
		$after = "This is not a Podcast";
	}
	
	$before = "This comes before the real content.";
	$fullcontent = $before . $content . $after;
	return $fullcontent;
}
add_filter ('the_content', 'versluis2013_add_content');

?>