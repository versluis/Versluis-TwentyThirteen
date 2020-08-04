<?php
/**************************** */
/* Versluis 2013 Theme
/* Main Functions 
/* *************************** */

// includes
include plugin_dir_path (__FILE__) . 'includes/headers.php';
include plugin_dir_path (__FILE__) . 'includes/podcast-badge.php';
include plugin_dir_path (__FILE__) . 'includes/wordcount.php';
include plugin_dir_path (__FILE__) . 'includes/mime-types.php';
include plugin_dir_path (__FILE__) . 'includes/ads.php';
include plugin_dir_path (__FILE__) . 'includes/roles.php';

//
// remove JetPack upsell messages 
// https://mattreport.com/disable-jetpack-upsell-ads/ 
add_filter( 'jetpack_just_in_time_msgs', '__return_false' );

?>