<?php
/**
 * Template Name: Home
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header();
?>


		<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();
				$imagens = get_field('slider'); ?>

				<div id="home-carousel" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<?php
							foreach ($imagens as $index => $imagem) {
								$imgUrl = $imagem['url'];
						?>
							<li data-target="#home-carousel" data-slide-to="<?php echo $index;?>" <?php if($index === 0){echo 'class="active"';}?>></li>
						<?php } ?>

					</ol>
					<div class="carousel-inner" role="listbox">
						<?php
							foreach ($imagens as $index => $imagem) {
								$imgUrl = $imagem['url'];
						?>
							<div class="item <?php if($index === 0){echo 'active';}?>">
								<img src="<?php echo $imgUrl; ?>" alt="First slide">
							</div>
						<?php } ?>
					</div>
					<a class="left carousel-control" href="#home-carousel" role="button" data-slide="prev">
						<span class="icon-prev" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#home-carousel" role="button" data-slide="next">
						<span class="icon-next" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>

			<div id="wrapper" class="container">
				<div class="row">
				<main id="content" class="<?php echo odin_classes_page_full(); ?>" tabindex="-1" role="main">
		<?php
				get_template_part( 'content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			endwhile;
		?>


	</main><!-- #main -->
<?php
get_footer();
