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
			$imagemBanner = get_field('banner_principal_img');
			$textLeft = get_field('texto_esquerda');
			$textRight = get_field('texto_direita');
		?>

			<div class="banner-principal">
				<div class="container">
          <div class="text-banner left-text col-md-3">
            <?php echo $textLeft; ?>
          </div>
          <div class="centralImg col-md-6">
            <img src="<?php echo $imagemBanner['url']; ?>" alt="" class="center-block">
          </div>
          <div class="text-banner right-text col-md-3 pull-right">
            <?php echo $textRight; ?>
          </div>

				</div>
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
