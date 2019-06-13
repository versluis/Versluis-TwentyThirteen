<?php
// versluis.com 2013
// Apple Podcast Badge functions
// since @1.8

function versluis2013_add_badge ($content){
	
	$appleBadge = get_stylesheet_directory_uri() . "/images/Apple-Podcasts-Badge.png";
	$stitcherBadge = get_stylesheet_directory_uri() . "/images/Stitcher-Badge.png";
	$youtubeBadge = get_stylesheet_directory_uri() . "/images/YouTube-Badge.png";
	
	if (in_category ('3D Podcast')) {
		
		// 3D Podcast
		$apple = "Catch this episode on my 3D Podcast:<br><a href='https://itunes.apple.com/us/podcast/jays-3d-podcast/id1433986629' target='_blank'><img id='apple-badge' src='".$appleBadge . "'></a>";
		
		$stitcher = "<br><a href='https://www.stitcher.com/s?fid=228524&refid=stpr' target='_blank'><img id='stitcher-badge' src='".$stitcherBadge . "'></a>";
		
		$after = $apple . $stitcher;
	
	} else if (in_category ('Storyist Podcast')) {
		
		// Storyist Podcast
		$youtube = "Watch the full course in one convenient playlist:<br><a href='https://www.youtube.com/playlist?list=PLPcx_LSSGfZcwUnfc9kcXeQ1GDvCnSLgm' target='_blank'><img id='youtube-badge' src='".$youtubeBadge."'></a>";
		
		$apple = "Catch this episode on my Storyist Podcast:<br><a href='https://itunes.apple.com/us/podcast/the-storyist-podcast/id1434351506' target='_blank'><img id='apple-badge' src='".$appleBadge . "'></a>";
		
		$stitcher = "<br><a href='https://www.stitcher.com/s?fid=228526&refid=stpr' target='_blank'><img id='stitcher-badge' src='".$stitcherBadge . "'></a>";
		
		$after = $youtube . $apple . $stitcher;
		
	} else if (in_category ('DAZ Studio 101')) {
		
		// DAZ Studio 101 Podcast
		$youtube = "Watch the full course in one convenient playlist:<br><a href='https://www.youtube.com/playlist?list=PLPcx_LSSGfZeCEvFO0spfYc3DzjpJyIzY' target='_blank'><img id='youtube-badge' src='".$youtubeBadge."'></a>";
		
		$apple = "Catch this episode on my DAZ Studio 101 Podcast:<br><a href='https://itunes.apple.com/us/podcast/the-storyist-podcast/id1434351506' target='_blank'><img id='apple-badge' src='".$appleBadge . "'></a>";
		
		$stitcher = "<br><a href='https://www.stitcher.com/s?fid=228526&refid=stpr' target='_blank'><img id='stitcher-badge' src='".$stitcherBadge . "'></a>";
		
		$after = $youtube . $apple . $stitcher;
		
	} else {
		
		// it's not a Podcast
		$after = '';	
	}
	
	// depending on where we are, print the podcast icons
	// since @2.0
	
	if (is_single()) {
		return $content . $after;
	} else {
		return $content;
	}
}
add_filter ('the_content', 'versluis2013_add_badge');

?>