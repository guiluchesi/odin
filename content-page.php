<?php
/**
 * The template used for displaying page content.
 *
 * @package Odin
 * @since 2.2.0
 */
?>
<div class="container">

	<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-9'); ?>>
		<header>
		  <h2 class="page-title">
		  	<?php the_title(); ?>
		  </h2>
		</header>

		<section class="page-body">
			<?php
				the_content();


				wp_link_pages( array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'odin' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
				) );
			?>
		</section><!-- .entry-content -->
	</article><!-- #post-## -->

	<?php get_sidebar(); ?>
</div>
