<?php
// versluis.com 2013
// Apple Podcast Badge functions
// since @1.8

function versluis2013_add_badge ($content){
	
	$badge = get_stylesheet_directory_uri() . "/images/Apple-Podcasts-Badge.png";
	
	if (in_category ('3D Podcast')) {
		
		// 3D Podcast
		$after = "Catch this episode on my 3D Podcast:<br><a href='https://itunes.apple.com/us/podcast/jays-3d-podcast/id1433986629' target='_blank'><img id='apple-badge' src='".$badge . "'></a>";
	
	} else if (in_category ('Storyist Podcast')) {
		
		// Storyist Podcast
		$after = "Catch this episode on my Storyist Podcast:<br><a href='https://itunes.apple.com/us/podcast/the-storyist-podcast/id1434351506' target='_blank'><img id='apple-badge' src='".$badge . "'></a>";
		
	} else {
		
		// it's not a Podcast
		$after = '';	
	}

	$content = $content . $after;
	return $content;
}
add_filter ('the_content', 'versluis2013_add_badge');

?>