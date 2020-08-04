<?php
/**************************** */
/* Versluis 2013 Theme
/* File Type Functions 
/* *************************** */

// enable additional file formats in Media Uploads
// adds: .brush .zip .blend 
// @since 2.2
function allow_brush_file_uploads ( $existing_mimes=array() ) {
	
	$existing_mimes['brush'] = 'text/plain'; 
	$existing_mimes['zip'] = 'application/zip';
    $existing_mimes['gz'] = 'application/x-gzip';
	$existing_mimes['blend'] = 'application/blender';
	
	return $existing_mimes;
}
add_filter('upload_mimes', 'allow_brush_file_uploads');