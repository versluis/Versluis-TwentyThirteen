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
 
  Template Name: TOC - Blender Articles
 
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
// show a list of articles by tag
// https://codex.wordpress.org/Class_Reference/WP_Query
// 

echo "<p>Over the years I've written many artcles about Blender. I decided to start a new tag with Blender 2.8, becasue some principles and the interface have so drastically changed.<br>";
						
// grab all articles with tag Blender (2.8)
$query = new WP_Query( array( 'tag' => 'blender', 'nopaging' => true ) );
$results = $query->found_posts;
echo "<p>So far I've written <strong>$results articles</strong> about Blender 2.8 and above.<br>Here's a list of each and every one of them:</p>";

// list all articles
if ($query->have_posts() ) {
	echo "";
	while ($query->have_posts() ) {
		$query->the_post();
		echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
	}
	echo "<br><hr>";
} // end of category articles list
						
// grab all articles with tag Blender 2.79
$query = new WP_Query( array( 'tag' => 'blender279', 'nopaging' => true ) );
$results = $query->found_posts;
echo "<p>I've also written <strong>$results articles</strong> about Blender 2.79 and below, from before the great interface re-design of 2019. Here's a complete list of them:</p>";

// list all articles
if ($query->have_posts() ) {
	echo "";
	while ($query->have_posts() ) {
		$query->the_post();
		echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
	}
	echo "";
} // end of category articles list



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