<?php
// show annual post archives
// https://codex.wordpress.org/Template_Tags/wp_get_archives
echo "<h3>Annual Summary</h3>";
$args = array(
    'type'            => 'yearly',
    'limit'           => '',
    'format'          => 'html', 
    'before'          => '',
    'after'           => '',
    'show_post_count' => true,
    'echo'            => 1,
    'order'           => 'DESC'
);
wp_get_archives( $args ); 
// end of annual archives 

$totalPosts = wp_count_posts()->publish;
echo "<h3>Every artcile I've ever written for this site</h3>";
echo "<p>That's a total of <strong>$totalPosts articles</strong> and counting!</p>";

// list all articles on this site
// https://codex.wordpress.org/Template_Tags/wp_get_archives
$args = array(
    'type'            => 'postbypost',
    'limit'           => '',
    'format'          => 'html', 
    'before'          => '',
    'after'           => '',
    'show_post_count' => false,
    'echo'            => 1,
    'order'           => 'DESC'
);

wp_get_archives( $args ); 

// end of all articles 