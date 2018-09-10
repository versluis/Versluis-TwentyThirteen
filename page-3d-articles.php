<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 
  Template Name: 3D Articles
 
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
						<div class="entry-thumbnail">
							<?php the_post_thumbnail(); ?>
						</div>
						<?php endif; ?>

						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php // the_content(); ?>
                        
<?php 
//
// show a list of 3D articles by tag
// https://codex.wordpress.org/Class_Reference/WP_Query

// count all 3D articles
$query = new WP_Query( array( 'category_name' => '3D', 'nopaging' => true ) );
$results = $query->found_posts;
echo "<p>So far I've written $results 3D Articles for this site. Here's a list of each one, grouped together by software:</p>";

// list all DAZ Studio Articles
echo "<h3>DAZ Studio</h3>";
$query = new WP_Query( array( 'tag' => '3D', 'nopaging' => true ) );
$results = $query->found_posts;
if ($query->have_posts() ) {
	echo "";
	while ($query->have_posts() ) {
		$query->the_post();
		echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
	}
	echo "";
}
// end of screencasts



?>
                        
						<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
					</div><!-- .entry-content -->

					<footer class="entry-meta">
						<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
					</footer><!-- .entry-meta -->
				</article><!-- #post -->

				<?php // comments_template(); ?>
			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>