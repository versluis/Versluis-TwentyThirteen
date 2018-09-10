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

