<?php
/**
 * Template Name: Home
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */
$postsArgs = array (
	'post_type'			=> array( 'post' ),
	'post_status'		=> array( 'publish' ),
	'posts_per_page'	=> '3'
);
get_header();
// Start the Loop.
while (have_posts()) : the_post();
?>

<main id="content" class="<?php echo odin_classes_page_full(); ?>" tabindex="-1" role="main">
	<?php
		echo (do_shortcode("[rev_slider alias='home-slider']")) ;
		endwhile;
  ?>

		<section class="container artigos owl-carousel">
			<div class="cards">
        <h2 class="card main">Artigos</h2>
			  <a class="card" href="#">Noticias</a>
			  <a class="card" href="#">Pesquisar</a>
			</div>
	    <?php
				$posts = new WP_Query($postsArgs);
				if ($posts->have_posts()) : while($posts->have_posts()) : $posts->the_post(); ?>

	        <article class="artigo col-md-4">

						<figure class="featured">
		          <a href="<?php the_permalink();?>" title="<?php the_title(); ?>">
								<?php echo odin_thumbnail( 280, 280, get_the_title(), true, 'article-photo' ); ?>
		          </a>
						</figure>

	          <a href="<?php the_permalink();?>">
	            <h3 class="description"><?php the_title(); ?></h3>
	          </a>

	          <a href="<?php the_permalink(); ?>" class="btn btn-default">Leia Mais</a>
	        </article>

      <?php endwhile; endif; wp_reset_query(); ?>

    </section>
</main><!-- #main -->
<?php
get_footer();
